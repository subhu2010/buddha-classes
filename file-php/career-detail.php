<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>BuddhaClasses</title>
  </head>
  <body>

    <div class="inner-banner inner-bg2">
      <div class="container">
        <div class="inner-title text-center">
          <h3>Career</h3>
          <ul>
            <li>
              <a href="{{url('/')}}">Home</a>
            </li>
            <li>
              <i class="fas fa-chevron-right"></i>
            </li>
            <li>Career Detail</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="faq-area pa-tb">
      <div class="container">
        <div class="section-title text-center">
          <h2>Careers</h2>
        </div>
      </div>
      <div class="container">
        <div class="career-detail">
          <h3>Job Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
        <div class="section-title text-center mt-5">
          <h2>Apply Now</h2>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="job-submit-form">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group">
                      <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone Number" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required="">
                    </div>
                    <div class="custom-file form-group">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label " for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group view-more">
                      <textarea class="form-control" placeholder="Message" name="message" required="" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group view-more mb-0">
                      <button type="submit" class="btn contact-form default-btn">Submit</button>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
  </html>