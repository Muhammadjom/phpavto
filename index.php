<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кнопка и Input</title>
</head>
<body>

<input type="text" id="myInput" placeholder="Введите текст">
<button onclick="setButtonText()"></button>

<script>
  function setButtonText() {
    // Получаем элемент input
    var inputElement = document.getElementById('myInput');

    // Получаем значение текста из input
    var inputValue = inputElement.value;

    // Получаем элемент кнопки
    var buttonElement = document.querySelector('button');

    // Устанавливаем значение текста кнопки равным значению input
    buttonElement.textContent = inputValue;
  }
</script>

</body>
</html>