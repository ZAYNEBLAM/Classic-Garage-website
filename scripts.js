document.addEventListener("DOMContentLoaded", () => {
    // First Form (Contact Us)
    const contactUsForm = document.getElementById("contactUsForm");
    const contactResponseMessage = document.getElementById("contactResponseMessage");

    contactUsForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const firstName = document.getElementById("contactFirstName").value;
        const lastName = document.getElementById("contactLastName").value;
        const email = document.getElementById("contactEmail").value;
        const message = document.getElementById("contactMessage").value;

        contactResponseMessage.innerHTML = `
            <p>Welcome <strong>${firstName} ${lastName}</strong>!</p>
            <p>We’ve received your question: "${message}".</p>
            <p>We'll get back to you soon at <strong>${email}</strong>.</p>
        `;

        contactUsForm.reset();
    });

    // Second Form (Contact Seller)
    const contactSellerForm = document.getElementById("contactSellerForm");
    const sellerResponseMessage = document.getElementById("sellerResponseMessage");

    contactSellerForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const firstName = document.getElementById("sellerFirstName").value;
        const lastName = document.getElementById("sellerLastName").value;
        const email = document.getElementById("sellerEmail").value;
        const model = document.getElementById("sellerModel").value;
        const message = document.getElementById("sellerMessage").value;

        sellerResponseMessage.innerHTML = `
            <p>Thank you, <strong>${firstName} ${lastName}</strong>, for your interest!</p>
            <p>You’ve expressed interest in the model <strong>${model}</strong>.</p>
            <p>Your message: "${message}".</p>
            <p>We’ll contact you shortly at <strong>${email}</strong>.</p>
        `;

        contactSellerForm.reset();
    });
});


