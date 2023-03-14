<form method="POST">
    <label for="length">Enter length:</label>
    <input type="number" name="length" id="length">
    <label for="width">Enter width:</label>
    <input type="number" name="width" id="width">
    <label for="radius">Enter radius:</label>
    <input type="number" name="radius" id="radius">
    <input type="submit" name="submit"  value="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST['length'];
    $width = $_POST['width'];
    $radius = $_POST['radius'];
    
    class Shape {
        public $length;
        public $width;
        public $radius;

        

        public function rectangle($length, $width) {
            echo "RECTANGLE";
            echo '<div style="width: ' . $length . 'px; height: ' . $width . 'px; border: 2px solid black;"></div>';
        }

        public function square($length) {
            echo "SQUARE";
            echo '<div style="width: ' . $length . 'px; height: ' . $length . 'px; border: 2px solid black;"></div>';
        }

        public function circle($radius) {
            echo "CIRCLE";
            echo '<div style="width: ' . $radius*2 . 'px; height: ' . $radius*2 . 'px; border-radius: ' . $radius . 'px; border: 2px solid black;"></div>';
        }
        public function triangle($length) {
            echo "TRIANGLE";
            echo '<div style="width: 0; height: 0; border-left: ' . $length . 'px solid transparent; border-right: ' . $length . 'px solid transparent; border-bottom: ' . $length . 'px solid black;"></div>';
        }
    }


    $shapeObject = new Shape();
    $shapeObject ->rectangle($length, $width);
    $shapeObject ->square($length);
    $shapeObject ->circle($radius);
    $shapeObject ->triangle($length);
    
}
?>