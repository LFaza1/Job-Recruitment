<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/style3.css">
    <script>
        function faq(ele) {
            var x = ele.parentElement.nextElementSibling.style.cssText;
            if (x == 'max-height: 500px;') {
                ele.style.cssText = 'transform: rotate(0deg);';
                ele.parentElement.nextElementSibling.style.cssText = "transition:0.3s;max-height:0px;";
            } else {
                ele.style.cssText = 'transform: rotate(45deg);';
                ele.parentElement.nextElementSibling.style.cssText = "max-height:500px;";
            }
        }
    </script>
    <title>FAQ</title>
</head>

<body>
    <?php include("./header.php"); ?>
    <div class="wrapper">
        <div class="container">
            <h1>FAQ</h1>
            <div class="faq">

                <div>
                    <p class="question">Do I need an account? <span onclick='faq(this)' class="opener">+</span></p>
                    <p class="answer">To get the most out of our website, you must first create an account. But don't worry,
                        it's completely free!</p>
                </div>

                <div>
                    <p class="question">Can I see a list of jobs I previously applied to? <span onclick='faq(this)' class="opener">+</span></p>
                    <p class="answer">Job seekers who apply for jobs on Vacan-Z may see a history of jobs they have applied
                        to on our site.</p>
                </div>

                <div>
                    <p class="question">Account Security? <span onclick='faq(this)' class="opener">+</span></p>
                    <p class="answer">The privacy and security of our Vacan-Z members are very important to us. We encourage
                        all of our members to exercise caution with their online passwords.
                        We recommend that you create a strong password to help strengthen your security on Vacan-Z.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include('./footer.php')?>
</body>

</html>