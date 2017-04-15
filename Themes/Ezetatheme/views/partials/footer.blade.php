<!-- ======== @Region: #footer ======== -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col">
                <div class="block contact-block">
                    <!--@todo: replace with company contact details-->
                    <h3>
                        Contact Us
                    </h3>
                    <address>
                        <ul class="fa-ul">
                            <li>
                                <abbr title="Phone"><i class="fa fa-li fa-phone"></i></abbr>
                                019223 8092344
                            </li>
                            <li>
                                <abbr title="Email"><i class="fa fa-li fa-envelope"></i></abbr>
                                info@appstraptheme.com
                            </li>
                            <li>
                                <abbr title="Address"><i class="fa fa-li fa-home"></i></abbr>
                                Sunshine House, Sunville. SUN12 8LU.
                            </li>
                        </ul>
                    </address>
                </div>
            </div>

            <div class="col-md-5 col">
                <div class="block">
                    <h3>
                        About Us
                    </h3>
                    <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                </div>
            </div>

            <div class="col-md-4 col">
                <div class="block newsletter">
                    <h3>
                        Boletín informativo
                    </h3>
                    <p>Estrenamos boletín. No bombardeamos con publicidad (es algo que odiamos). Sólo enviaremos información puntual y que consideremos realmente relevante.</p>
                    <!--
                                        <form action="//ezetahosting.us12.list-manage.com/subscribe/post?u=1130bebb81707e413309e2f24&amp;id=6076f15a3f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div class="input-group input-group-sm">
                                                <label class="sr-only" for="mce-EMAIL">Email</label>
                                                <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email" required>
                    -->
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <!--
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1130bebb81707e413309e2f24_6076f15a3f" tabindex="-1" value=""></div>
                                                <span class="input-group-btn">
                                                    <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Me suscribo!</button>
                                                </span>
                                            </div>
                                        </form>
                    -->
                    <a href="http://eepurl.com/bIml7z" alt="Suscribirme al boletín" class ="btn btn-primary">¡Suscribirme al boletín!</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="toplink">
                <a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a>
            </div>
            <!--@todo: replace with company copyright details-->
            <div class="subfooter">
                <div class="col-md-6">
                    <p>Site template by <a href="appstraptheme.com">AppStrap</a> | Copyright 2012 &copy; AppStrap</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline footer-menu">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Hidden elements - excluded from jPanel Menu on mobile-->
<div class="hidden-elements jpanel-menu-exclude">
    <!--@modal - signup modal-->
    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                        Sign Up
                    </h4>
                </div>
                <div class="modal-body">
                    <form action="signup.htm" role="form">
                        <h5>
                            Price Plan
                        </h5>
                        <select class="form-control">
                            <option>Basic</option>
                            <option>Pro</option>
                            <option>Pro +</option>
                        </select>

                        <h5>
                            Account Information
                        </h5>
                        <div class="form-group">
                            <label class="sr-only" for="signup-first-name">First Name</label>
                            <input type="text" class="form-control" id="signup-first-name" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-last-name">Last Name</label>
                            <input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-username">Userame</label>
                            <input type="text" class="form-control" id="signup-username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-email">Email address</label>
                            <input type="email" class="form-control" id="signup-email" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-password">Password</label>
                            <input type="password" class="form-control" id="signup-password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="term">
                                I agree with the Terms and Conditions.
                            </label>
                        </div>
                        <button class="btn btn-primary" type="submit">Sign up</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>Already signed up? <a href="login.htm">Login here</a>.</small>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--@modal - login modal-->

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                        Login
                    </h4>
                </div>
                <div class="modal-body">

                    {!! Form::open(['route' => 'login.post']) !!}
                    <div class="body bg-gray">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control"
                                   placeholder="{{ trans('user::auth.email') }}" value="{{ Input::old('email')}}"/>
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password"
                                   class="form-control" placeholder="Password"
                                   value="{{ Input::old('password')}}"/>
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember_me" id="remember_me"/>
                            <label for="remember_me">{{ trans('user::auth.remember me') }}</label>
                        </div>
                    </div>
                    <div class="footer">
                        <button type="submit" class="btn btn-primary btn-block">{{ trans('user::auth.login') }}</button>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>¿No es cliente? <a href="{{URL::route('register')}}" class="text-center">{{ trans('user::auth.register')}}</a></small>
                    <br />
                    <small><a href="{{URL::route('reset')}}">{{ trans('user::auth.forgot password') }}</a></small>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>