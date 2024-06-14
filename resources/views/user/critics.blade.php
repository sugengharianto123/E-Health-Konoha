<div class="page-section bg-light" id="critics-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Criticism and Suggestions</h1>

        <form class="main-form" action="{{ url('critics') }}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name" required="">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address.." required="">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required=""></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn"
                style="background-color: #00D9A5; border-color: transparent;">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->
