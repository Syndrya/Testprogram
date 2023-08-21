<html>
<head>
    <title>Smallest Number Generator</title>
    <script>
        function generateSmallestNumber() {
            const inputSequence = document.getElementById("inputSequence").value;
            const digits = [];

            let currentNumber = 1;

            for (let i = 0; i < inputSequence.length; i++) {
                if (inputSequence[i] === "M") {
                    digits.unshift(currentNumber);
                    currentNumber++;
                } else if (inputSequence[i] === "N") {
                    digits.push(currentNumber);
                    currentNumber++;
                }
            }

            const smallestNumber = digits.join("");
            document.getElementById("output").textContent = smallestNumber;
        }
    </script>
</head>
<body>
    <h1>Smallest Number Generator</h1>
    <label for="inputSequence">Enter the sequence (M and N only):</label>
    <input type="text" id="inputSequence">
    <button onclick="generateSmallestNumber()">Generate</button>
    <p>Smallest Number: <span id="output"></span></p>
</body>
</html>
