<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Practice</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="tugas4.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- LEFT IMAGE -->
            <div class="col-md-4 p-1">
                <img src="img/Image.png"
                class="img-fluid h-60 w-70 object-fit-cover"
                alt="Image">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-md-7 d-flex align-items-center bg-light">
                <div class="content px-5">

                    <h2 class="fw-bold mb-3">Light, Fast & Powerful</h2>

                    <p class="text-light-blue">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    </p>

                    <p class="text-light-blue mb-5">
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.
                    </p>

                    <!-- FEATURES -->
                    <div class="row g-0">

                        <div class="col-md-6">
                            <div class="feature">
                                <div class="icon mb-4">
                                    <img src="https://project-manager-app-mf6j.vercel.app/static/media/illustration-placeholder.42479c40a4db7912926b.png"
                                        class="img-fluid h-90 w-25 object-fit-cover" alt="image">
                                </div>
                                <h6 class="fw-bold">Title Goes Here</h6>
                                <p class="small text-muted">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature">
                                <div class="icon mb-4">
                                    <img src="https://project-manager-app-mf6j.vercel.app/static/media/illustration-placeholder.42479c40a4db7912926b.png"
                                        class="img-fluid h-100 w-25 object-fit-cover" alt="image">
                                </div>
                                <h6 class="fw-bold">Title Goes Here</h6>
                                <p class="small text-muted">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature">
                                <div class="icon mb-2">
                                    <img src="https://project-manager-app-mf6j.vercel.app/static/media/illustration-placeholder.42479c40a4db7912926b.png"
                                        class="img-fluid h-100 w-25 object-fit-cover" alt="image">
                                </div>
                                <h6 class="fw-bold">Title Goes Here</h6>
                                <p class="small text-muted">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature">
                                <div class="icon mb-2">
                                    <img src="https://project-manager-app-mf6j.vercel.app/static/media/illustration-placeholder.42479c40a4db7912926b.png"
                                        class="img-fluid h-100 w-25 object-fit-cover" alt="image">
                                </div>
                                <h6 class="fw-bold">Title Goes Here</h6>
                                <p class="small text-muted">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>
