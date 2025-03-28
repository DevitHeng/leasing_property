<link rel="stylesheet" media="screen, print" href="{{ asset('plugin/css/formplugins/cropperjs/cropper.css') }}">

<!--user id-->
<div id="userphotoid" style="display:none"></div>
<div id="urlPath" style="display:none"></div>


<!--Script for Cropper-->
<div class="modal fade" id="imageCropDiv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-700">
                <h5 class="modal-title" id="userPictureLabel">New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <h3>Demo:</h3> -->
                        <div class="img-container">
                            <img id="image" alt="Picture">
                        </div>
                    </div>
                    <div class="col-xl-3" style="display:none!important">
                        <!-- <h3>Preview:</h3> -->
                        <div class="docs-preview clearfix">
                            <div class="img-preview preview-lg"></div>
                            <div class="img-preview preview-md"></div>
                            <div class="img-preview preview-sm"></div>
                            <div class="img-preview preview-xs"></div>
                        </div>
                        <!-- <h3>Data:</h3> -->
                        <div class="docs-data">
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataX">X</label>
                                </span>
                                <input type="text" class="form-control" id="dataX" placeholder="x">
                                <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataY">Y</label>
                                </span>
                                <input type="text" class="form-control" id="dataY" placeholder="y">
                                <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataWidth">Width</label>
                                </span>
                                <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataHeight">Height</label>
                                </span>
                                <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                </span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataRotate">Rotate</label>
                                </span>
                                <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                <span class="input-group-append">
                                    <span class="input-group-text">deg</span>
                                </span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataScaleX">ScaleX</label>
                                </span>
                                <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataScaleY">ScaleY</label>
                                </span>
                                <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="display:none">
                    <div class="col-lg-9 docs-buttons">
                        <!-- <h3>Toolbar:</h3> -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="setDragMode"
                                data-option="move" title="Move">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                    <span class="fas fa-arrows"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="setDragMode"
                                data-option="crop" title="Crop">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                    <span class="fas fa-crop"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1"
                                title="Zoom In">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;zoom&quot;, 0.1)">
                                    <span class="fas fa-search-plus"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1"
                                title="Zoom Out">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;zoom&quot;, -0.1)">
                                    <span class="fas fa-search-minus"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="move" data-option="-10"
                                data-second-option="0" title="Move Left">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;move&quot;, -10, 0)">
                                    <span class="fas fa-arrow-left"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="move" data-option="10"
                                data-second-option="0" title="Move Right">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;move&quot;, 10, 0)">
                                    <span class="fas fa-arrow-right"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                data-second-option="-10" title="Move Up">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;move&quot;, 0, -10)">
                                    <span class="fas fa-arrow-up"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                data-second-option="10" title="Move Down">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;move&quot;, 0, 10)">
                                    <span class="fas fa-arrow-down"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45"
                                title="Rotate Left">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;rotate&quot;, -45)">
                                    <span class="fas fa-undo"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="rotate" data-option="45"
                                title="Rotate Right">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;rotate&quot;, 45)">
                                    <span class="fas fa-redo"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1"
                                title="Flip Horizontal">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;scaleX&quot;, -1)">
                                    <span class="fas fa-arrows-h"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1"
                                title="Flip Vertical">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;scaleY&quot;, -1)">
                                    <span class="fal fa-arrows-v"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;crop&quot;)">
                                    <span class="fas fa-check"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="clear" title="Clear"
                                id='clearimageselectbtn'>
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;clear&quot;)">
                                    <span class="fas fa-times"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;disable&quot;)">
                                    <span class="fas fa-lock"></span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;enable&quot;)">
                                    <span class="fas fa-unlock"></span>
                                </span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-method="reset" title="Reset"
                                id='clearimagebtn'>
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;reset&quot;)">
                                    <span class="fas fa-sync"></span>
                                </span>
                            </button>
                            <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                <input type="file" class="sr-only" id="inputImage" name="file"
                                    accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="Import image with Blob URLs">
                                    <span class="fas fa-image mr-1"></span> Upload
                                </span>
                            </label>
                        </div>
                        <button type="button" class="btn btn-danger" data-method="destroy" title="Destroy">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;destroy&quot;)">
                                <span class="fas fa-power-off"></span>
                            </span>
                        </button>
                        <div class="btn-group btn-group-crop">
                            <button type="button" class="btn btn-success" data-method="getCroppedCanvas"
                                data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">
                                    Get Cropped Canvas
                                </span>
                            </button>
                            <button type="button" class="btn btn-success" data-method="getCroppedCanvas"
                                data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                    160&times;90
                                </span>
                            </button>
                            <button id="imagecrop600600" type="button" class="btn btn-success"
                                data-method="getCroppedCanvas"
                                data-option="{ &quot;width&quot;: 600, &quot;height&quot;: 600 }">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 600, height: 600 })">
                                    600&times;600
                                </span>
                            </button>

                            <button type="button" class="btn btn-success" data-method="getCroppedCanvasCustom"
                                data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                    320&times;180
                                </span>
                            </button>
                        </div>
                        <!-- Show the cropped image in modal -->
                        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                            aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <a class="btn btn-primary" id="download" href="javascript:void(0);"
                                            download="cropped.jpg">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->

                        <button type="button" class="btn btn-secondary" data-method="getData" data-option
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;getData&quot;)">
                                Get Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="setData"
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;setData&quot;, data)">
                                Set Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="getContainerData" data-option
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;getContainerData&quot;)">
                                Get Container Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="getImageData" data-option
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;getImageData&quot;)">
                                Get Image Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="getCanvasData" data-option
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;getCanvasData&quot;)">
                                Get Canvas Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="setCanvasData"
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;setCanvasData&quot;, data)">
                                Set Canvas Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="getCropBoxData" data-option
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;getCropBoxData&quot;)">
                                Get Crop Box Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="setCropBoxData"
                            data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                Set Crop Box Data
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="moveTo" data-option="0">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="cropper.moveTo(0)">
                                Move to [0,0]
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="zoomTo" data-option="1">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="cropper.zoomTo(1)">
                                Zoom to 100%
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="rotateTo" data-option="180">
                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                title="cropper.rotateTo(180)">
                                Rotate 180°
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-method="scale" data-option="-2"
                            data-second-option="-1">
                            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
                                Scale (-2, -1)
                            </span>
                        </button>
                        <textarea class="form-control" id="putData" rows="1"
                            placeholder="Get data to here or set data with this value"></textarea>
                    </div>

                    <!-- /.docs-buttons -->
                    <div class="col-lg-3 docs-toggles" style="display:none">
                        <!-- <h3>Toggles:</h3> -->
                        <div class="btn-group btn-group-sm d-flex flex-nowrap" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio"
                                    value="1.7777777777777777">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="aspectRatio: 16 / 9">
                                    16:9
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio"
                                    value="1.3333333333333333">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="aspectRatio: 4 / 3">
                                    4:3
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio"
                                    value="1">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="aspectRatio: 1 / 1">
                                    1:1
                                </span>
                            </label>

                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio"
                                    value="0.8" checked>
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="aspectRatio: 4 / 6">
                                    4:6
                                </span>
                            </label>

                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio"
                                    value="NaN">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="aspectRatio: NaN">
                                    Free
                                </span>
                            </label>
                        </div>
                        <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0"
                                    checked>
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="View Mode 0">
                                    VM0
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="viewMode1" name="viewMode"
                                    value="1">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="View Mode 1">
                                    VM1
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="viewMode2" name="viewMode"
                                    value="2">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="View Mode 2">
                                    VM2
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="viewMode3" name="viewMode"
                                    value="3">
                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false"
                                    title="View Mode 3">
                                    VM3
                                </span>
                            </label>
                        </div>
                        <div class="dropdown dropup docs-options">
                            <button type="button" class="btn btn-primary btn-block dropdown-toggle"
                                id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                Toggle Options
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="responsive" type="checkbox"
                                            name="responsive" checked>
                                        <label class="form-check-label" for="responsive">responsive</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="restore" type="checkbox"
                                            name="restore" checked>
                                        <label class="form-check-label" for="restore">restore</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="checkCrossOrigin" type="checkbox"
                                            name="checkCrossOrigin" checked>
                                        <label class="form-check-label"
                                            for="checkCrossOrigin">checkCrossOrigin</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="checkOrientation" type="checkbox"
                                            name="checkOrientation" checked>
                                        <label class="form-check-label"
                                            for="checkOrientation">checkOrientation</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="modal" type="checkbox"
                                            name="modal" checked>
                                        <label class="form-check-label" for="modal">modal</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="guides" type="checkbox"
                                            name="guides" checked>
                                        <label class="form-check-label" for="guides">guides</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="center" type="checkbox"
                                            name="center" checked>
                                        <label class="form-check-label" for="center">center</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="highlight" type="checkbox"
                                            name="highlight" checked>
                                        <label class="form-check-label" for="highlight">highlight</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="background" type="checkbox"
                                            name="background" checked>
                                        <label class="form-check-label" for="background">background</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="autoCrop" type="checkbox"
                                            name="autoCrop" checked>
                                        <label class="form-check-label" for="autoCrop">autoCrop</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="movable" type="checkbox"
                                            name="movable" checked>
                                        <label class="form-check-label" for="movable">movable</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="rotatable" type="checkbox"
                                            name="rotatable" checked>
                                        <label class="form-check-label" for="rotatable">rotatable</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="scalable" type="checkbox"
                                            name="scalable" checked>
                                        <label class="form-check-label" for="scalable">scalable</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="zoomable" type="checkbox"
                                            name="zoomable" checked>
                                        <label class="form-check-label" for="zoomable">zoomable</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="zoomOnTouch" type="checkbox"
                                            name="zoomOnTouch" checked>
                                        <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="zoomOnWheel" type="checkbox"
                                            name="zoomOnWheel" checked>
                                        <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="cropBoxMovable" type="checkbox"
                                            name="cropBoxMovable" checked>
                                        <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="cropBoxResizable" type="checkbox"
                                            name="cropBoxResizable" checked>
                                        <label class="form-check-label"
                                            for="cropBoxResizable">cropBoxResizable</label>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="form-check">
                                        <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox"
                                            name="toggleDragModeOnDblclick" checked>
                                        <label class="form-check-label"
                                            for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.dropdown -->
                    </div>
                    <!-- /.docs-toggles -->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" onclick="new function () { $('#inputImage').click()}"><i
                        class="fal fa-photo-video"></i>&nbsp;Browse</button>
                <button class="btn btn-primary" onclick="new function () { $('#imagecrop600600').click()}"><i
                        class="fal fa-save"></i>&nbsp;Set</button>
            </div>
        </div>
    </div>
</div>

<!--Script for Cropper-->

<script src="{{ asset('plugin/js/formplugins/cropperjs/cropper.js') }}"></script>

<script>
    $(function() {
        'use strict';
        var URL = window.URL || window.webkitURL;
        var $image = $('#image');
        var $download = $('#download');
        var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
            aspectRatio: 16 / 9,
            preview: '.img-preview',
            crop: function(e) {
                $dataX.val(Math.round(e.detail.x));
                $dataY.val(Math.round(e.detail.y));
                $dataHeight.val(Math.round(e.detail.height));
                $dataWidth.val(Math.round(e.detail.width));
                $dataRotate.val(e.detail.rotate);
                $dataScaleX.val(e.detail.scaleX);
                $dataScaleY.val(e.detail.scaleY);
            }
        };
        var originalImageURL = $image.attr('src');
        var uploadedImageName = 'cropped.jpg';
        var uploadedImageType = 'image/jpeg';
        var uploadedImageURL;

        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Cropper
        $image.on({
            ready: function(e) {
                console.log(e.type);
            },
            cropstart: function(e) {
                console.log(e.type, e.detail.action);
            },
            cropmove: function(e) {
                console.log(e.type, e.detail.action);
            },
            cropend: function(e) {
                console.log(e.type, e.detail.action);
            },
            crop: function(e) {
                console.log(e.type);
            },
            zoom: function(e) {
                console.log(e.type, e.detail.ratio);
            }
        }).cropper(options);

        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
            $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }

        if (typeof document.createElement('cropper').style.transition === 'undefined') {
            $('button[data-method="rotate"]').prop('disabled', true);
            $('button[data-method="scale"]').prop('disabled', true);
        }

        // Download
        if (typeof $download[0].download === 'undefined') {
            $download.addClass('disabled');
        }

        // Options
        $('.docs-toggles').on('change', 'input', function() {
            var $this = $(this);
            var name = $this.attr('name');
            var type = $this.prop('type');
            var cropBoxData;
            var canvasData;

            if (!$image.data('cropper')) {
                return;
            }

            if (type === 'checkbox') {
                options[name] = $this.prop('checked');
                cropBoxData = $image.cropper('getCropBoxData');
                canvasData = $image.cropper('getCanvasData');

                options.ready = function() {
                    $image.cropper('setCropBoxData', cropBoxData);
                    $image.cropper('setCanvasData', canvasData);
                };
            } else if (type === 'radio') {
                options[name] = $this.val();
            }

            $image.cropper('destroy').cropper(options);
        });

        // Methods
        $('.docs-buttons').on('click', '[data-method]', function() {
            var $this = $(this);
            var data = $this.data();
            var cropper = $image.data('cropper');
            var cropped;
            var $target;
            var result;

            if ($this.prop('disabled') || $this.hasClass('disabled')) {
                return;
            }

            if (cropper && data.method) {
                data = $.extend({}, data); // Clone a new one

                if (typeof data.target !== 'undefined') {
                    $target = $(data.target);

                    if (typeof data.option === 'undefined') {
                        try {
                            data.option = JSON.parse($target.val());
                        } catch (e) {
                            console.log(e.message);
                        }
                    }
                }

                cropped = cropper.cropped;

                switch (data.method) {
                    case 'rotate':
                        if (cropped && options.viewMode > 0) {
                            $image.cropper('clear');
                        }

                        break;

                    case 'getCroppedCanvas':
                        if (uploadedImageType === 'image/jpeg') {
                            if (!data.option) {
                                data.option = {};
                            }

                            data.option.fillColor = '#fff';
                        }

                        break;
                }

                result = $image.cropper(data.method, data.option, data.secondOption);

                switch (data.method) {
                    case 'rotate':
                        if (cropped && options.viewMode > 0) {
                            $image.cropper('crop');
                        }

                        break;

                    case 'scaleX':
                    case 'scaleY':
                        $(this).data('option', -data.option);
                        break;

                    case 'getCroppedCanvas':
                        if (result) {
                            // Bootstrap's Modal
                            //$('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                            /*if (!$download.hasClass('disabled')) {
                                download.download = uploadedImageName;
                                $download.attr('href', result.toDataURL(uploadedImageType));
                            }*/

                            //document.getElementById("staffPhoto").src = result.toDataURL('image/jpeg');

                            saveSignatureImage(result.toDataURL('image/jpeg'));

                            $('#imageCropDiv').modal('hide');
                        }

                        break;
                    case 'destroy':
                        if (uploadedImageURL) {
                            URL.revokeObjectURL(uploadedImageURL);
                            uploadedImageURL = '';
                            $image.attr('src', originalImageURL);
                        }

                        break;
                }

                if ($.isPlainObject(result) && $target) {
                    try {
                        $target.val(JSON.stringify(result));
                    } catch (e) {
                        console.log(e.message);
                    }
                }
            }
        });

        // Keyboard
        $(document.body).on('keydown', function(e) {
            if (e.target !== this || !$image.data('cropper') || this.scrollTop > 300) {
                return;
            }

            switch (e.which) {
                case 13:
                    e.preventDefault();
                    $('#imagecrop600600').click();
                    break;
                case 37:
                    e.preventDefault();
                    $image.cropper('move', -1, 0);
                    break;

                case 38:
                    e.preventDefault();
                    $image.cropper('move', 0, -1);
                    break;

                case 39:
                    e.preventDefault();
                    $image.cropper('move', 1, 0);
                    break;

                case 40:
                    e.preventDefault();
                    $image.cropper('move', 0, 1);
                    break;
            }
        });

        // Import image
        var $inputImage = $('#inputImage');

        if (URL) {
            $inputImage.change(function() {
                var files = this.files;
                var file;

                if (!$image.data('cropper')) {
                    return;
                }

                if (files && files.length) {
                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        uploadedImageName = file.name;
                        uploadedImageType = file.type;

                        if (uploadedImageURL) {
                            URL.revokeObjectURL(uploadedImageURL);
                        }

                        uploadedImageURL = URL.createObjectURL(file);
                        $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                        $inputImage.val('');
                    } else {
                        window.alert('Please choose an image file.');
                    }
                }
            });
        } else {
            $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
    });

    var saveSignatureImage = async (base64img) => {
        var userId = $("#userphotoid").html();
        var urlPath = $("#urlPath").html(); //Save User Image or Signature Image

        resizeImage(base64img, 150, 84).then(compress => {
            $.ajax({
                url: urlPath,
                type: "POST",
                data: {
                    _token: formToken,
                    base64img: base64img,
                    compressbase64: compress,
                    userId: userId
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + AuthToken);
                },
                success: function(response) {
                    if (response.result == "error") {
                        sweetToast(response.msg, response.result);
                        return;
                    }

                    if (urlPath === "{{ url('api/userprofile/saveUserImage') }}") {
                        $("#panelUserImage").prop('src', base64img);
                        $("#leftpaneluserphoto").prop('src', base64img);
                        $("[name='headeruserphoto']").prop('src', base64img);
                    } else {
                        $("#userSignator").prop('src', base64img);
                    }


                    sweetToast(response.msg, response.result);
                },
                error: function(e) {
                    Msg('Error Signature Image', 'error');
                }
            });
        });
    }

    $(document).ready(function() {
        $('#aspectRatio0').click();
    });
</script>
