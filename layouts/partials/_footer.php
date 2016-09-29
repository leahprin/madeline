<footer class="footer">
    <div class="footer__container">
        <div class="footer__info-mobile">
            <a href="{{network.defaultBlogUrl}}" class="footer__logo"><img src="https://unsplash.it/225/50"/></a>
            <div class="footer__social-links">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-facebook-f"></i></a>
            </div>
            <a class="footer__additional-links" href="#">Contact Us</a>
            <a class="footer__additional-links" href="#">Privacy Policy</a>
            <a class="footer__additional-links" href="#">Terms & Conditions</a>
            <div class="footer__copyright">Copyright {{'now'|date('Y')}}. All rights reserved.</div>
        </div>

        <div class="footer__desktop">
            <div class="footer__left">
                <a href="{{network.defaultBlogUrl}}" class="footer__logo"><img src="https://unsplash.it/225/50"/></a>
                <div class="footer__navigation">
                    <div class="header__navigation-row">
                        <ul class="header__navigation-list">
                            <li class="header__navigation-item"><a href="{{homeUrl}}" class="header__navigation-link header__navigation-selected">Home</a></li>
                            <li class="header__navigation-item">
                                <a href="/" class="header__navigation-link">
                                    Experts
                                </a>
                            </li>
                            <li class="header__navigation-item">
                                <a href="/" class="header__navigation-link">
                                    Style
                                </a>
                            </li>
                            <li class="header__navigation-item">
                                <a href="/" class="header__navigation-link">
                                    Fashion
                                </a>
                            </li>
                            <li class="header__navigation-item">
                                <a href="/" class="header__navigation-link">
                                    Beauty
                                </a>
                            </li>
                            <li class="header__navigation-item">
                                <a href="/" class="header__navigation-link">
                                    Celebrity
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__right">
                <div class="footer__additional-links">
                    <div class="footer__social-links">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                    </div>
                    <a class="footer__additional-links" href="#">Contact Us</a>
                    <a class="footer__additional-links" href="#">Privacy Policy</a>
                    <a class="footer__additional-links" href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__container">
        <div class="footer__copyright">© All rights reserved</div>
    </div>
</footer>

<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/dropzone/dropzone.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/plugins/jquery.noty-2.3.8/js/noty/packaged/jquery.noty.packaged.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/jquery.simplemodal.js"></script>


<script type="text/javascript" src="js/plugins/waypoint/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/share/js/rrssb.js"></script>

<script type="text/javascript" src="js/handlebars-v4.0.5.js"></script>

<script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>

<!-- App scripts -->
<script type="text/javascript" src="dev/js/_article-templates.js"></script>

<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/cloudinary/jquery.cloudinary.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/common.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/blog.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/article.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/search.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/disqus.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/video-player.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/user-articles.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/follow.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/login.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/image.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/social-share.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/yii/yii.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/yii/yii.captcha.js"></script>
<script type="text/javascript" src="{{_AppHelper.getAssetsSDKPath()}}/js/uploadfile.js"></script>

<script type="text/javascript" src="dev/js/home.js"></script>
<script type="text/javascript" src="dev/js/search.js"></script>
<script type="text/javascript" src="dev/js/user-articles.js"></script>
<script type="text/javascript" src="dev/js/auth.js"></script>
<script type="text/javascript" src="dev/js/common.js"></script>
<script type="text/javascript" src="dev/js/user-profile.js"></script>

<div class="SwappingHelper" style="display:none">
    <div style="width: 270px; height: 105px; padding: 3px; background-color: #FFF; max-width: 270px; max-height: 105px; overflow: hidden; z-index: 999 !important;">
        <img class="article-image" src="https://unsplash.it/100/100/?random" style="width:97px; height: 97px; float: left;" />
        <p class="article-text" style="width: 165px; float: left; padding-left: 3px;color: #394659;font-size: 14px; font-family: Droid Serif,serif; line-height: 20px; margin-top:0px;">Dummy text  </p>
    </div>
</div>

<div id="socialShare-Modal" class="modal" aria-hidden="true" aria-labelledby="shareModal" role="dialog" tabindex="-1" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-8 col-xs-12">
                        <ul class="rrssb-buttons clearfix">
                            <li class="rrssb-facebook ">
                                <a href="javascript:void(0)" class="popup">
                                    <span class="rrssb-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
                                    </span>
                                    <span class="rrssb-text">facebook</span>
                                </a>
                            </li>
                            <li class="rrssb-linkedin">
                                <a href="javascript:void(0)" class="popup">
                                    <span class="rrssb-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M25.424 15.887v8.447h-4.896v-7.882c0-1.98-.71-3.33-2.48-3.33-1.354 0-2.158.91-2.514 1.802-.13.315-.162.753-.162 1.194v8.216h-4.9s.067-13.35 0-14.73h4.9v2.087c-.01.017-.023.033-.033.05h.032v-.05c.65-1.002 1.812-2.435 4.414-2.435 3.222 0 5.638 2.106 5.638 6.632zM5.348 2.5c-1.676 0-2.772 1.093-2.772 2.54 0 1.42 1.066 2.538 2.717 2.546h.032c1.71 0 2.77-1.132 2.77-2.546C8.056 3.593 7.02 2.5 5.344 2.5h.005zm-2.48 21.834h4.896V9.604H2.867v14.73z"/></svg>
                                    </span>
                                    <span class="rrssb-text">linkedin</span>
                                </a>
                            </li>
                            <li class="rrssb-twitter">
                                <a href="javascript:void(0)"
                                   class="popup">
                                    <span class="rrssb-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
                                    </span>
                                    <span class="rrssb-text">twitter</span>
                                </a>
                            </li>


                            <li class="rrssb-googleplus">
                                <a href="javascript:void(0)" class="popup">
                                    <span class="rrssb-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
                                    <span class="rrssb-text">google+</span>
                                </a>
                            </li>

                            <li class="rrssb-pinterest">
                                <a href="javascript:void(0)">
                                    <span class="rrssb-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M14.02 1.57c-7.06 0-12.784 5.723-12.784 12.785S6.96 27.14 14.02 27.14c7.062 0 12.786-5.725 12.786-12.785 0-7.06-5.724-12.785-12.785-12.785zm1.24 17.085c-1.16-.09-1.648-.666-2.558-1.22-.5 2.627-1.113 5.146-2.925 6.46-.56-3.972.822-6.952 1.462-10.117-1.094-1.84.13-5.545 2.437-4.632 2.837 1.123-2.458 6.842 1.1 7.557 3.71.744 5.226-6.44 2.924-8.775-3.324-3.374-9.677-.077-8.896 4.754.19 1.178 1.408 1.538.49 3.168-2.13-.472-2.764-2.15-2.683-4.388.132-3.662 3.292-6.227 6.46-6.582 4.008-.448 7.772 1.474 8.29 5.24.58 4.254-1.815 8.864-6.1 8.532v.003z"/></svg>
                                    </span>
                                    <span class="rrssb-text">pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
