function createPopup() {
  const popup = document.createElement("div");
  popup.id = "popupdiv";
  popup.className = "popupdivs";

  popup.style.display = "none";

  popup.innerHTML = `
    <div id="popupTitle"><p class="text">Payment Methods</p></div>
    <div class="methods" id="ideal"><img src="./images/ideal.png" class="payimgs" id="idealimg"></div>
    <div class="methods" id="paypal"><img src="./images/paypal.png" class="payimgs"></div>
    <div class="methods" id="card"><img src="./images/creditcard.png" class="payimgs"></div>
    <div  id="pay">
    <div id="paybutton"><p class="text" >Pay</p></div>
    </div>
    <button id='closePopup'>Close</button>`;

  document.body.appendChild(popup);

  document.getElementById("closePopup").addEventListener("click", function () {
    popup.style.display = "none";
  });

  document.getElementById("pay").addEventListener("click", function () {
    if (!selectedDonation) {
      alert("Select a donation amount!");
      return;
    }

    const workElement = document.getElementById("work_id");

    const selectedWorkId = workElement.dataset.workId;

    let amount = selectedDonation.replace("€", "").trim();

    //102464.stu.sd-lab.nl/Beroeps/Crowdfunding/pages/upload/uploadDonationsforWork.php
    fetch("/Beroeps/Crowdfunding/pages/upload/uploadDonationsforWork.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "amount=" +
        encodeURIComponent(amount) +
        "&work_id=" +
        encodeURIComponent(selectedWorkId),
    })
      .then((response) => response.text())
      .then((data) => {
        console.log("PHP response:", data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}

function showPopup() {
  const popup = document.getElementById("popupdiv");
  if (popup) {
    popup.style.display = "grid";
  }
}

createPopup();

let selectedDonation = null;

const buttons = document.querySelectorAll(".donationBTNS");

for (const button of buttons) {
  button.addEventListener("click", function () {
    selectedDonation = this.innerText.trim();

    showPopup();
  });
}
