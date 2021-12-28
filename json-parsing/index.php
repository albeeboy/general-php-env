<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSON Parsing Fun!</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #000;
      margin: 0;
      padding: 0;
      background-color: #ddd;
    }
    #container {
      box-sizing: border-box;
      position: relative;
      width: calc(100% - 6rem);
      padding: 3rem;
      margin: 3rem;
      background-color: #fff;
    }
    h2 {
      margin: 0 0 1rem 0;
    }
    p, hr {
      margin: 0 0 2rem 0;
    }
    #data-list {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .data-container {
      margin: 0 0 0.5rem 0;
    }
    .data-container strong{
      color: blue;
    }
  </style>
</head>
<body>
  <div id="container">
    <h2>Woocommerce data from "woocommerce_data.json"</h2>
    <ul id="data-list"></ul>
  </div>
</body>
<script>
  fetch("./woocommerce_data.json")
    .then(response => {
      return response.json();
    })
    .then(data => {
      console.log("Woocommerce data: ", data);
      const dataList = document.getElementById("data-list");
      // first name
      const firstName = document.createElement("li");
      firstName.classList.add("data-container");
      firstName.id = "first-name";
      const firstNameText = document.createTextNode(data[0].billing.first_name);
      firstName.innerHTML = "<strong>First name: </strong>";
      firstName.insertAdjacentText("beforeend", firstNameText.data);
      // last name
      const lastName = document.createElement("li");
      lastName.classList.add("data-container");
      lastName.id = "last-name";
      const lastNameText = document.createTextNode(data[0].billing.last_name);
      lastName.innerHTML = "<strong>Last name: </strong>";
      lastName.insertAdjacentText("beforeend", lastNameText.data);
      // company
      const company = document.createElement("li");
      company.classList.add("data-container");
      company.id = "company";
      const companyText = document.createTextNode(data[0].billing.company);
      company.innerHTML = "<strong>Company: </strong>";
      company.insertAdjacentText("beforeend", companyText.data);
      // phone number
      const phoneNumber = document.createElement("li");
      phoneNumber.classList.add("data-container");
      phoneNumber.id = "phone-number";
      const phoneNumberText = document.createTextNode(data[0].billing.phone);
      phoneNumber.innerHTML = "<strong>Phone number: </strong>";
      phoneNumber.insertAdjacentText("beforeend", phoneNumberText.data);
      // email address
      const emailAddress = document.createElement("li");
      emailAddress.classList.add("data-container");
      emailAddress.id = "email-address";
      const emailAddressText = document.createTextNode(data[0].billing.email);
      emailAddress.innerHTML = "<strong>Email address: </strong>";
      emailAddress.insertAdjacentText("beforeend", emailAddressText.data);
      // munckin code
      const munchkinCode = document.createElement("li");
      munchkinCode.classList.add("data-container");
      munchkinCode.id = "munchkin-code";
      const munchkinCodeText = document.createTextNode(data[0].meta_data[1].value);
      munchkinCode.innerHTML = "<strong>Munchkin code: </strong>";
      munchkinCode.insertAdjacentText("beforeend", munchkinCodeText.data);

      dataList.append(firstName, lastName, company, phoneNumber, emailAddress, munchkinCode);
    });
</script>
</html>
