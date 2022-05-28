<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-sm-12 col-md-8 col-xl-5 mt-5 pt-2 pb-2">
            <div class="row text-center mb-4 mt-5">
                <i class="fa fa-user-circle-o fa-4x"></i>
            </div>
            <div class="row justify-content-center mb-2">
                <label class="col-sm-12 col-md-2 col-xl-2">Email : </label>
                <div class="col-sm-12 col-md-6 col-xl-8">
                    <input class="form-control form-control-sm" type="text">
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <label class="col-sm-12 col-md-2 col-xl-2">Pass : </label>
                <div class="col-sm-12 col-md-6 col-xl-8">
                    <input class="form-control form-control-sm" type="text">
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-sm-12 col-md-4 col-xl-3">
                    <button class="btn btn-sm btn-success form-control form-control-sm"> Login</button>
                </div>

            </div>
            <div class="row mb-4 pb-2">
                <ul class="nav justify-content-center text-center">
                    <a class="nav-link " data-bs-toggle="modal" data-bs-target="#changPass"><i class="fa fa-key"></i> Forget Pass</a>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-phone"></i>Contact</a>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal changPass-->
    <div class="modal fade" id="changPass" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chang Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center mb-2">
                        <label class="col-sm-12 col-md-2 col-xl-2 mb-2">Email : </label>
                        <div class="col-sm-12 col-md-6 col-xl-7 mb-2">
                            <input class="form-control form-control-sm" type="Email" required>
                        </div>
                        <div class="col-sm-12 col-md-3 col-xl-3 mb-2">
                            <button class="btn btn-sm btn-success form-control form-control-sm"><i class="fa fa-paper-plane-o"></i> Sent</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal contact-->
    <div class="modal fade" id="contact" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center mb-2">
                        <ul class="nav flex-column ">
                            <li class="nav-item ">
                                <span class=""> - Email: xxxx@gmail.com</span>
                            </li>
                            <li class="nav-item">
                                <span> - Tell : 0999999999</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

}
</script>
