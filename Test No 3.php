<html>
<head>
    <title>Water Bucket Calculator</title>
    <script>
        function calculateBottles() {
            const bottle1Capacity = 5;
            const bottle2Capacity = 7;
            const bottle3Capacity = 11;

            const targetWaterQuantity = parseInt(document.getElementById("waterQuantity").value);

            let minBottles = Infinity;
            let optimalCombination;

            for (let bottle1Count = 0; bottle1Count <= targetWaterQuantity / bottle1Capacity; bottle1Count++) {
                for (let bottle2Count = 0; bottle2Count <= targetWaterQuantity / bottle2Capacity; bottle2Count++) {
                    for (let bottle3Count = 0; bottle3Count <= targetWaterQuantity / bottle3Capacity; bottle3Count++) {
                        const totalWater = bottle1Count * bottle1Capacity + bottle2Count * bottle2Capacity + bottle3Count * bottle3Capacity;
                        const totalBottles = bottle1Count + bottle2Count + bottle3Count;

                        if (totalWater === targetWaterQuantity && totalBottles < minBottles) {
                            minBottles = totalBottles;
                            optimalCombination = [bottle1Count, bottle2Count, bottle3Count];
                        }
                    }
                }
            }

            if (optimalCombination) {
                document.getElementById("result").textContent = `Bottle 1 = ${optimalCombination[0]} bottles, Bottle 2 = ${optimalCombination[1]} bottles, Bottle 3 = ${optimalCombination[2]} bottles, total = ${minBottles} bottles`;
            } else {
                document.getElementById("result").textContent = "No valid combination found.";
            }
        }
    </script>
</head>
<body>
    <h1>Water Bucket Calculator</h1>
    <label for="waterQuantity">Enter desired water quantity:</label>
    <input type="number" id="waterQuantity">
    <button onclick="calculateBottles()">Calculate</button>
    <p id="result"></p>
</body>
</html>
