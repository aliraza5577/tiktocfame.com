public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->nullable();
        $table->foreignId('product_id');
        $table->string('tiktok_username');
        $table->string('payment_id');
        $table->decimal('amount', 10, 2);
        $table->string('status');
        $table->timestamps();
    });
}