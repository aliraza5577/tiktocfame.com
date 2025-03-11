<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Order;
use App\Models\SubCategoryModel;
use App\Http\Controllers\SocialMediaController;

class CheckoutController extends Controller
{
    protected $socialMediaController;

    public function __construct(SocialMediaController $socialMediaController)
    {
        $this->socialMediaController = $socialMediaController;
    }

    /**
     * Show checkout page for a specific product.
     */
    public function index($productId)
    {
        $product = ProductModel::findOrFail($productId);
        // Get active products with status 0
        $similarProducts = ProductModel::where('sub_category_id', $product->sub_category_id)
                                      ->where('status', 0)
                                      ->get();

        // Always include the current product
        if (!$similarProducts->contains('id', $product->id)) {
            $similarProducts->push($product);
        }

        return view('checkout', [
            'getSubCategories' => SubCategoryModel::getActiveRecord(),
            'meta_title' => "Checkout - TikTok Fame",
            'meta_keyword' => "Checkout - TikTok Fame",
            'meta_desc' => "Checkout - TikTok Fame",
            'seo_schema' => "Checkout - TikTok Fame",
            'product' => $product,
            'similarProducts' => $similarProducts,
        ]);
    }

    /**
     * Store the checkout order.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            // other validation rules
        ]);

        // Store email in session for later use in payment processing
        session(['checkout_email' => $validatedData['email']]);

        // Retrieve product with service_type
        $product = ProductModel::findOrFail($request->product_id);

        // Create order
        Order::create([
            'product_id' => $product->id,
            'total_price' => $product->sale_price,
            'username' => $request->username,
            'link' => $request->link ?? null,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone ?? null,
            'service_type' => $product->service_type, // Add service_type from product
            'status' => 'pending',
        ]);

        return redirect()->route('checkout', ['id' => $request->product_id]);
    }

    /**
     * Fetch TikTok user data from SocialMediaController.
     */
    public function tiktok($username)
    {
        return $this->socialMediaController->fetchTikTokUserData($username);
    }

    // Find the method that renders the checkout view (likely show or index)
    //         public function show($id)
    // {
    //     $product = Product::findOrFail($id);

    //     return view('checkout', compact('product', 'similarProducts'));
    // }

    /**
     * Get product details via AJAX.
     */
    public function getProductDetails($id)
    {
        $product = ProductModel::findOrFail($id);
        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'sale_price' => $product->sale_price,
            'service_type' => $product->service_type,
        ]);
    }
}
