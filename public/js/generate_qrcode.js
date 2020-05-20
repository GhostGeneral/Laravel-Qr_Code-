const $ = document;

$.querySelector("#form").addEventListener("submit", (e) => {
  e.preventDefault();
  const data = { qrText: $.querySelector("#qrText").value };
  console.log(data);

  fetch('http://127.0.0.1:8000/api/generate_qrcode/', {
    method: 'POST', 
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
    .then(response => response.json())
    .then(response => {
      $.querySelector(".qr").innerHTML = `<img src='../qrcodes/${response.data}'/>`;
      $.querySelector("#qrText").value = "";
    })
    .catch((error) => {
      console.log(error);
      $.querySelector(".message").innerHTML = '<alert class="danger">Qrcode failed to generate.</alert>';
      $.querySelector("#qrText").value = "";
    });
});