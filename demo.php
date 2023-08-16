<!DOCTYPE html>
<html>
<head>
    <title>Scroll-to-Top Button Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #scrollToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #555;
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
        }
        #scrollToTopBtn:hover {
            background-color: #333;
        }
    </style>
   
</head>
<body>
    <!-- Your website content -->
    <h1>h</h1>
    <h1>a</h1>
    <h1>s</h1>
    <h1>s</h1>
    <h1>s</h1>
    <h1>s</h1>
    <h1>s</h1>
    <h1>st</h1>
    <h1>st</h1>
    <h1>st</h1>
    <h1>stti</h1>
    <h1>stti</h1>
    <h1>sttiii</h1>
   
    <button id="scrollToTopBtn" title="Go to top">Top</button>
    <!-- <script src="scroll-to-top.js"></script> -->
    <script>
        const scrollToTopButton = document.getElementById("scrollToTopBtn");

// Show or hide the button based on the scroll position
window.addEventListener("scroll", () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
});

// Scroll to the top when the button is clicked
scrollToTopButton.addEventListener("click", () => {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
});

    </script>
</body>
</html>
