<!DOCTYPE html>
<html>
<head>
    <title>Question-Sesion</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Hide the default appearance */

input[type="range"] {
    -webkit-appearance: none;
    width: 50%;
    height: 10px;
    border-radius: 50px;
    background: #0fa5fc;
    outline: none;
}

input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #4c87af;
    cursor: pointer;
    transition: background .15s ease-in-out;
}

input[type="range"]::-webkit-slider-thumb:hover {
    background: #4578a0;
}

input[type="range"]::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4c78af;
    cursor: pointer;
    transition: background .15s ease-in-out;
}

input[type="range"]::-moz-range-thumb:hover {
    background: #4577a0;
}

input[type="range"]::-ms-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4c82af;
    cursor: pointer;
    transition: background .15s ease-in-out;
}

input[type="range"]::-ms-thumb:hover {
    background: #4577a0;
}

input[type="range"]::-moz-range-track {
    width: 100%;
    height: 15px;
    border-radius: 50px;
    background: #06a2fc;
}

input[type="range"]::-ms-track {
    width: 100%;
    height: 15px;
    border-radius: 50px;
    background: transparent;
    border-color: transparent;
    color: transparent;
}
</style>
</head>
<body>
    <h1>Daily Mood Tracker</h1>
    <form method="post" action="/submit-mood">
        @csrf
        <div>
            <p>How would you rate your overall mood today on a scale of 1 to 5?</p>
            <label for="overall_mood">Overall Mood:</label>
            <input type="range" name="overall_mood" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall energy level today on a scale of 1 to 5?</p>
            <label for="overall_energy">Overall Energy:</label>
            <input type="range" name="overall_energy" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall stress level today on a scale of 1 to 5?</p>
            <label for="overall_stress">Overall Stress:</label>
            <input type="range" name="overall_stress" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall pain level today on a scale of 1 to 5?</p>
            <label for="overall_pain">Overall Pain:</label>
            <input type="range" name="overall_pain" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall sleep quality last night on a scale of 1 to 5?</p>
            <label for="overall_sleep">Overall Sleep:</label>
            <input type="range" name="overall_sleep" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall appetite today on a scale of 1 to 5?</p>
            <label for="overall_appetite">Overall Appetite:</label>
            <input type="range" name="overall_appetite" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall concentration today on a scale of 1 to 5?</p>
            <label for="overall_concentration">Overall Concentration:</label>
            <input type="range" name="overall_concentration" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall motivation today on a scale of 1 to 5?</p>
            <label for="overall_motivation">Overall Motivation:</label>
            <input type="range" name="overall_motivation" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall productivity today on a scale of 1 to 5?</p>
            <label for="overall_productivity">Overall Productivity:</label>
            <input type="range" name="overall_productivity" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall happiness today on a scale of 1 to 5?</p>
            <label for="overall_happiness">Overall Happiness:</label>
            <input type="range" name="overall_happiness" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall socialization today on a scale of 1 to 5?</p>
            <label for="overall_socialization">Overall Socialization:</label>
            <input type="range" name="overall_socialization" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall loneliness today on a scale of 1 to 5?</p>
            <label for="overall_loneliness">Overall Loneliness:</label>
            <input type="range" name="overall_loneliness" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall anxiety today on a scale of 1 to 5?</p>
            <label for="overall_anxiety">Overall Anxiety:</label>
            <input type="range" name="overall_anxiety" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall depression today on a scale of 1 to 5?</p>
            <label for="overall_depression">Overall Depression:</label>
            <input type="range" name="overall_depression" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall anger today on a scale of 1 to 5?</p>
            <label for="overall_anger">Overall Anger:</label>
            <input type="range" name="overall_anger" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall irritability today on a scale of 1 to 5?</p>
            <label for="overall_irritability">Overall Irritability:</label>
            <input type="range" name="overall_irritability" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall calmness today on a scale of 1 to 5?</p>
            <label for="overall_calmness">Overall Calmness:</label>
            <input type="range" name="overall_calmness" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall self-esteem today on a scale of 1 to 5?</p>
            <label for="overall_self_esteem">Overall Self-Esteem:</label>
            <input type="range" name="overall_self_esteem" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall self-confidence today on a scale of 1 to 5?</p>
            <label for="overall_self_confidence">Overall Self-Confidence:</label>
            <input type="range" name="overall_self_confidence" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall self-compassion today on a scale of 1 to 5?</p>
            <label for="overall_self_compassion">Overall Self-Compassion:</label>
            <input type="range" name="overall_self_compassion" min="1" max="5" required><br><br>
        </div>
        <div>
            <p>How would you rate your overall self-care today on a scale of 1 to 5?</p>
            <label for="overall_self_care">Overall Self-Care:</label>
            <input type="range" name="overall_self_care" min="1" max="5" required><br><br>
        </div>
        <div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
