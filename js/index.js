let contact = `<div class="card border-0 h-100 g-0 mt-2 ms-2" style="max-width: 408px;">
<div class="row g-0" id="contact-list">

    <div class="col-4">
        <img src="images/SeekPng.com_avatar-png_1150053.png"
            class="img-fluid rounded-start" alt="..." style="min-height: 136px; max-height: 136px; max-width: 136px; ">
    </div>

    <div class="col-8">
        <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">
                UCF<br>
                555-555-5555<br>
                John@example.com
            </p>
        </div>
    </div>

</div>
</div>`;

function addContact() {
    $("#contact-list").prepend(contact);
}