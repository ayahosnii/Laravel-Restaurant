<template>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form action="/examples/actions/confirmation.php" method="post" >
                            <h2 class="text-center">Log in</h2>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="email" >
                                <div  class="text-danger">
                                    ... the email is not valid
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" >
                                <div class="text-danger">
                                    ... the password is too short
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                        class="btn btn-primary btn-block"
                                >Log in</button>
                            </div>
                            <div class="clearfix">
                                <a href="#" class="pull-right">Forgot Password?</a>
                            </div>
                        </form>
                        <p class="text-center"><a class="switch-toregister-modal" href="#">Create an Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
