<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>100 GYM Quote</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
        p{
            font-family: 'Satisfy', cursive;
        }
        blockquote p::before {
            content: "“";
        }
        blockquote p::after {
            content: "”";
        }

    </style>
    
</head>
<body>
    <?php
    $gymQuote = [
        '<Div class="bg-amber-200">
            <div class="h-screen flex items-center justify-center mx-96 px-36 leading-10">
                <blockquote>
                    <p class="text-5xl ">I hated every minute of training, but I said, ‘Don’t quit. Suffer now and live the rest of your life as a champion.</p>
                    <cite class="grid grid-cols-1 gap-4 place-items-end">&mdash; Muhammad Ali</cite>
                </blockquote>
            </div>
        </Div>',
        '<Div class="bg-amber-200">
            <div class="h-screen flex items-center justify-center mx-96 px-36 leading-10">
                <blockquote>
                    <p class="text-5xl ">We are what we repeatedly do. Excellence then is not an act but a habit.</p>
                    <cite class="grid grid-cols-1 gap-4 place-items-end">&mdash; Aristotele</cite>
                </blockquote>
            </div>
        </Div>',
        '<Div class="bg-amber-200">
            <div class="h-screen flex items-center justify-center mx-96 px-36 leading-10">
                <blockquote>
                    <p class="text-5xl ">The body achieves what the mind believes.</p>
                    <cite class="grid grid-cols-1 gap-4 place-items-end">&mdash; Napoleon Hill</cite>
                </blockquote>
            </div>
        </Div>',
        '<Div class="bg-amber-200">
            <div class="h-screen flex items-center justify-center mx-96 px-36 leading-10">
                <blockquote>
                    <p class="text-5xl ">The hard days are the best because that’s when champions are made, so if you push through, you can push through anything.</p>
                    <cite class="grid grid-cols-1 gap-4 place-items-end">&mdash; Dana Vollmer</cite>
                </blockquote>
            </div>
        </Div>',
        '<Div class="bg-amber-200">
            <div class="h-screen flex items-center justify-center mx-96 px-36 leading-10">
                <blockquote>
                    <p class="text-5xl ">If you don’t find the time, if you don’t do the work, you don’t get the results.</p>
                    <cite class="grid grid-cols-1 gap-4 place-items-end">&mdash; Arnold Schwarzenegger</cite>
                </blockquote>
            </div>
        </Div>',
        '<Div class="bg-amber-200">
            <div class="h-screen flex items-center justify-center mx-96 px-36 leading-10">
                <blockquote>
                    <p class="text-5xl ">Push harder than yesterday if you want a different tomorrow.</p>
                    <cite class="grid grid-cols-1 gap-4 place-items-end">&mdash; Vincent Williams Sr.</cite>
                </blockquote>
            </div>
        </Div>'
 ];

shuffle($gymQuote);
$newGymQuote = array_unique($gymQuote);
echo $newGymQuote[0];

?>
    
</body>
</html>
