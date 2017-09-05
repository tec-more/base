<?php
/**
 * @var string $name
 * @var string $value
 */
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">缩略图</h3>
        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        {!! Form::selectImageBox($name, $value) !!}
    </div>
</div>
