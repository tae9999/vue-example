<template>
<!-- <div class="container"> -->
    <nav class="navbar bg_nav fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand w_text" href="/home">TAE Developer</a>

            <div class="offcanvas offcanvas-start nav_menu" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <span></span>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-3">
                        <i class="fa fa-user-circle-o fa-4x"></i>
                    </div>
                    <div class="col-12 text-center">
                        <div class="btn-group">
                            <span class="pr-2 wellcome">สวัสดี คุณ.......... </span>
                            <i class="fa fa-caret-down fa-2x d_profile" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa fa-address-card-o fa-lg"></i> Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item " href="#"><i class="fa fa-power-off fa-2"></i> Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home fa-lg"></i>โต๊ะทำงาน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bar-chart fa-lg"></i> รายงานทั้งหมด</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="admin" role="button" data-bs-toggle="dropdown" >
                                <i class="fa fa-cogs fa-lg"></i> ผู้ดูแลระบบ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="admin">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-cogs fa-lg"></i> จัดการบริษัท</a></li>
                                <li><a class="dropdown-item" href="/department"><i class="fa fa-cogs fa-lg"></i> จัดการแผนก</a></li>
                                <li><a class="dropdown-item" href="/prefixe"><i class="fa fa-cogs fa-lg"></i> จัดการคำนำหน้าชื่อ</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-cogs fa-lg"></i> จัดการผู้ใช้งาน</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-sliders"></i> จัดการสิทธิการใช้งาน</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<!-- </div> -->
</template>

<script>
export default {

}
</script>
<style scoped>
ul{
    margin-left: 20px;
}
.bg_nav{
    background-color: rgb(245, 153, 153);
    box-shadow: 1px 3px 5px rgb(187, 93, 93);
}
.w_text{
    font-weight: bold;
    font-size: 25px;
    color: rgb(252, 252, 252);
    text-shadow: 1px 2px 2px rgb(250, 3, 3);
}
.w_text:hover{
    color: rgb(218, 44, 44);
    text-shadow: 1px 2px 2px rgb(255, 255, 255);
    text-decoration: none;
}
.nav_menu{
    background-color: rgb(243, 232, 232);
    box-shadow: 1px 0px 8px rgb(245, 111, 111);
}
ul li a{
    font-size: 16px;
    color: rgb(92, 89, 89);
}
ul li a:hover{
    padding-left: 15px;
    border-left-style: solid;
    border-left-width: 5px;
    border-left-color: rgb(72, 216, 173);
    font-size: 17px;
    color: rgb(248, 3, 3);
    text-decoration: none;
}
.active{
    padding-left: 15px;
    border-left-style: solid;
    border-left-width: 5px;
    border-left-color: rgb(245, 59, 59);
    background-image: linear-gradient(to right, rgba(241, 112, 112), rgb(253, 250, 250,0)); 
    color: rgb(255, 255, 255) !important;
    
    
}
.wellcome{
    font-size: 19px;
    color: aliceblue;
    text-shadow: 2px 1px 3px rgb(209, 78, 78);
}
.d_profile{
    /* font-size: 19px; */
    color: aliceblue;
    text-shadow: 2px 1px 3px rgb(209, 78, 78);
}
.d_profile:hover{
    /* font-size: 19px; */
    color: rgb(245, 97, 97);
    text-shadow: 2px 1px 3px rgb(87, 85, 85);
}
</style>
