<section id="ltr_form">
    <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            
            <div class="form mb-3">

              <div class="form-body">

                <div class="pt-4 pb-2">
                  <h5 class="form-title text-center pb-0 fs-4">FEEDBACK</h5>
                </div>

                <form action="#" method="POST" class="row g-3 was-validated">
                  <div class="col-12">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter name" name="name" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="col-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label">Message:</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submit" value="SEND">SEND</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
</section>