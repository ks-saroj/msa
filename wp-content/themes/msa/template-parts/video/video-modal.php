<!--video modal sec -->
<div class="ks-video-box">
    <div class="modal fade" id="ksVideoModal" tabindex="-1" role="dialog" aria-labelledby="ksVideoModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php if(get_field('video_type') === 'vimeo'): ?>
                        <iframe class="embed-responsive-item" src="" id="ks_video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        <?php else: ?>
                        <iframe class="embed-responsive-item" src="" id="ks_video" frameborder="0" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video modal ends -->