// Reward messages for each donation amount
const rewards = {
  5: "Je ontvangt een mooie ansichtkaart met een foto van een student als dank voor je steun.",
  10: "Je ontvangt een kleine A5-fotoprint van een foto uit de expositie, ideaal om in te lijsten.",
  25: "Je ontvangt een grote A3-fotoprint en je naam wordt vermeld bij de expositie.",
};

function createPopup() {
  const popup = document.createElement("div");
  popup.id = "popupdiv";
  popup.className = "popupdivs";
  popup.style.display = "none";
  popup.innerHTML = `
    <div id="popupTitle"><p class="text">Payment Methods</p></div>
    <div id="donationAmountDisplay"><p class="text">Donation: <span id="selectedAmount"></span></p></div>
    <div id="rewardMessage"><p class="text" id="rewardText"></p></div>
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
      showMessage("Please select a donation amount!", "error");
      return;
    }
    const workElement = document.getElementById("work_id");
    const selectedWorkId = workElement.dataset.workId;
    let amount = selectedDonation.replace("€", "").trim();
    fetch("./pages/upload/uploadDonationsforWork.php", {
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
        const jsonData = JSON.parse(data);
        if (jsonData.success === true) {
          const popup = document.getElementById("popupdiv");
          popup.style.display = "none";
          showMessage("Betaling geslaagd! Bedankt voor je donatie!", "success");
          console.log("Successfully sent");
        } else {
          showMessage(
            jsonData.message || "Betaling mislukt. Probeer het opnieuw..",
            "error",
          );
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        showMessage("An error occurred. Please try again later.", "error");
      });
  });
}

function showMessage(message, type) {
  // Remove existing message if any
  const existingMessage = document.getElementById("notification-message");
  if (existingMessage) {
    existingMessage.remove();
  }
  // Create message element
  const messageDiv = document.createElement("div");
  messageDiv.id = "notification-message";
  messageDiv.className = `notification ${type}`;
  messageDiv.textContent = message;
  document.body.appendChild(messageDiv);
  // Show message with animation
  setTimeout(() => {
    messageDiv.classList.add("show");
  }, 10);
  // Auto-hide after 4 seconds
  setTimeout(() => {
    messageDiv.classList.remove("show");
    setTimeout(() => {
      messageDiv.remove();
    }, 300);
  }, 4000);
}

function showPopup() {
  const popup = document.getElementById("popupdiv");
  if (popup) {
    // Update the donation amount display
    const amountDisplay = document.getElementById("selectedAmount");
    if (amountDisplay && selectedDonation) {
      amountDisplay.textContent = selectedDonation;
    }

    // Update the reward message based on the selected amount
    const rewardTextElement = document.getElementById("rewardText");
    if (rewardTextElement && selectedDonation) {
      const amount = selectedDonation.replace("€", "").trim();
      rewardTextElement.textContent =
        rewards[amount] || "Thank you for your support!";
    }

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
