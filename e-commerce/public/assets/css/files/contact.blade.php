@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')



<div class="row-header" >
    <h1 class="font-weight-light mt-2">
        Contact with us
    </h1>
    <h4 lass="font-weight-light mt-2">
        Check Our Working Hours & Don't Hesitate To Reach Out For Help!

    </h4>
</div>

<div class="contact3 py-5">
    <div class="row no-gutters">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-shadow">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/2.jpg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-box ml-3">
              <h2 class="font-weight-light mt-2">Keep in Touch</h2>
              <form class="mt-4" action="#">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input class="form-control" type="text" placeholder="Your name" id="name">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input class="form-control" type="email" placeholder="Your email address" id="email">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input class="form-control" type="text" placeholder="Phone" id="phone">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <textarea class="form-control" rows="8" placeholder="Message" id="msg"></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-danger mt-3 text-white border-0 px-3 py-2" onclick="showAlert()"><span> Send</span></button>
                  </div>
                </div>
                <div class="message">
                    <div class="success" id="success">Your Message Successfully Sent!</div>
                    <div class="danger" id="danger">Feilds Can't be Empty!</div>
                </div>

              </form>
            </div>
          </div>

          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13652.05386105063!2d29.9060892!3d31.19264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16cbff5d844ff34b!2sInformation%20Technology%20Institute!5e0!3m2!1sen!2seg!4v1668651523480!5m2!1sen!2seg" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

          <div class="col-lg-12">
            <div class="card mt-4 border-0 mb-4">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail pl-0">
                    <div class="mr-3 align-self-center">
                      <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Address</h6>
                      <p class="">1 Mahmoud Salamah,Kom Ad Dakah
                        <br>Gharb, Al Attarin, Alexandria </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Phone</h6>
                      <p class="">012 546 9442
                        <br> 012 446 8851</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Email</h6>
                      <p class="">
                        info@iti.com
                        <br> info@iti.com
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
function showAlert(){
    var Name = document.getElementById('name');
    var email = document.getElementById('email');
    var msg = document.getElementById('msg');
    var msg = document.getElementById('phone');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(Name.value === '' || email.value === '' || msg.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            Name.value = '';
            email.value = '';
            msg.value = '';
        }, 2000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}

  </script>


@endsection
