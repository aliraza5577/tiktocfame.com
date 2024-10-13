<div class="productCustomQuote">
    <span>GET CUSTOM QUOTE</span>
    <form id="popup_customQuote" method="POST" action="{{ url('custom_quote') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 input-placeholder">
                <input type="text" name="name" placeholder="Name" required />
                <div class="placeholder">*</div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 input-placeholder">
                <input type="text" name="phone" placeholder="Phone" required />
                <div class="placeholder">*</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 input-placeholder">
                <input type="email" name="email" placeholder="Email" required />
                <div class="placeholder">*</div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <input type="text" name="quantity" placeholder="Quantity" required />
            </div>
        </div>
        <div class="row quoteRequirments">
            <div class="col-6 col-md-3 col-lg-3">
                <input type="text" name="length" placeholder="Length" />
            </div>
            <div class="col-6 col-md-3 col-lg-3">
                <input type="text" name="width" placeholder="Width" />
            </div>
            <div class="col-6 col-md-3 col-lg-3">
                <input type="text" name="dimension" placeholder="Depth" />
            </div>
            <div class="col-6 col-md-3 col-lg-3">
                <select name="scale">
                    <option value="cm">CM</option>
                    <option value="inch">Inch</option>
                    <option value="MM">MM</option>
                    <option value="Need Consultation">Need Consultation</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <select name="color">
                    <option value="Inside Printing">Inside Printing</option>
                    <option value="Outside Printing">Outside Printing</option>
                    <option value="Both Side Printing">Both Side Printing</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7 col-md-7">
                <textarea name="message" placeholder="Describe Here..."></textarea>
            </div>

            <div class="col-12 col-lg-5 col-md-5">
                <div class="fileUploadWrap">
                    <div class="fileUploadArea">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                        </svg>
                        <p><span>Click to upload</span> or drag and drop</p>
                        <input id="popfileInput" class="hidden" type="file" name="image" />
                    </div>

                    <!-- This will display the preview or the file name -->
                    <div id="popfilePreview" style="display: none; margin-top: 10px;">
                        <img id="poppreviewImage" src="" alt="Image Preview" style="max-width: 100%; height: auto; display: none;" />
                        <p id="popfileName"></p>
                    </div>
                </div>
            </div>

            <div class="col-12 submitBtnWrap">
                <input type="submit" value="Submit"/>
                <div class="loadingWrap"><div class="loader"></div></div>

            </div>
        </div>
    </form>
    <div id="popup-success-message" style="color: green;"></div>
    <div id="popup-error-message" style="color: red;"></div>
</div>



<script>
// File Upload
document.getElementById('popfileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const filePreview = document.getElementById('popfilePreview');
    const fileName = document.getElementById('popfileName');
    const previewImage = document.getElementById('poppreviewImage');

    if (file) {
        filePreview.style.display = 'block';
        fileName.innerText = 'Selected file: ' + file.name;

        // Check if the file is an image and display a preview
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            // Hide image preview if the selected file is not an image
            previewImage.style.display = 'none';
        }
    } else {
        filePreview.style.display = 'none'; // Hide preview if no file is selected
    }
});

</script>
