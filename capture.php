<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script src="./js/jquery.min.js"></script>
         <title>Document</title>
</head>
<body>
    <div id="container">
            <form action="save_img.php" method="post" id="form_id">
                <div class="select">
                     <label for="videoSource">Video source: </label>
                     <select id="videoSource"></select>
                </div>

                <div class="camera">
                    <video id="video">Video stream not available.</video>
                    <button id="startbutton">Take photo</button>
                </div>

                <div>
                            <!-- first div -->
                        <div>
                                <canvas id="fcanvis">
                                    <div >
                                             <img id="firstimg" alt="The screen capture will appear in this box.">    
                                    </div>
                                </canvas>
                                 <input type="hidden" name="image" id="image-tag1">
                                 <button id="frmbtn">Remove img</button>
                        </div>
                            <!-- second div -->
                        <div>
                                <canvas id="scanvis">
                                    <div >
                                             <img id="secondimg" alt="The screen capture will appear in this box.">        
                                    </div>
                                </canvas>
                                 <input type="hidden" name="image2" id="image-tag2">
                                 <button id="srmbtn">remove img</button>
                        </div>
                            <!-- third div -->
                        <div>
                                <canvas id="tcanvis">
                                    <div>
                                             <img id="thridimg" alt="The screen capture will appear in this box.">
                                    </div>
                                </canvas>
                                 <input type="hidden" name="image3" id="image-tag3">
                                 <button id="trmbtn">Remove img</button>
                        </div>
                </div>
                <input type="submit" value="submit" >
            </form>   
    </div>
<script async src="./js/capture.js"></script>
</body>
</html>