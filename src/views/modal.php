<?php
/**
 *
 * this html text must be 1 line for javascript content
 * original file =>>  /vendor/jalloulkhaled/yii2-cropper-bootstrap5/src/views/modal.php
 *
 */
/** @var $unique string */
/** @var $cropperOptions [] */

$modalLabel = Yii::t('strings', 'cropper.title');
$browseLabel = $cropperOptions['icons']['browse'] . ' ' . Yii::t('strings', 'cropper.browse');
$closeLabel = $cropperOptions['icons']['close'] . ' ' . Yii::t('strings', 'cropper.crop');

$cropWidth = $cropperOptions['width'];
$cropHeight = $cropperOptions['height'];

echo '<div class="modal fade" tabindex="-1" role="dialog" id="cropper-modal-'. $unique .'">'
    .'<div class="modal-dialog modal-lg" role="document">'
    .'<div class="modal-content">'
    .'<div class="modal-header">'
    .'<h4 class="modal-title" id="modalLabel-'. $unique .'">'. $modalLabel .'</h4>'
    .'<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'
    .'</div>'
    .'<div class="modal-body">'
    .'<div><img id="cropper-image-'. $unique .'" src="" alt=""></div>'
    .'</div>'

    /* ****  MODAL-FOOTER begin  ****/
    .'<div class="modal-footer">'

    .'<div class="row" style="margin-bottom: 10px">'
    .'</div>'
    .'<div class="cropper-modal-wrapper col-12">'
    .'<span class="cropper-browse-btn btn btn-red btn-file ms-1">'. $browseLabel
    .'<input type="file" id="cropper-input-'. $unique .'" title="'. Yii::t('strings', 'cropper.browse') .'" accept="image/*">'
    .'</span>&nbsp;'
    .'<button type="button" id="close-button-'. $unique .'" class="btn  btn-blue float-md-end ms-1" data-bs-dismiss="modal">'. $closeLabel .'</button>'
    .'</div>'


    .'</div>'
    /* ****  MODAL-FOOTER end  ****/


    .'</div>'
    .'</div>'
    .'</div>';