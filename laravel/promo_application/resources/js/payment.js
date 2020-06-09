const toggleDonations = document.querySelector('#toggleDonations')
const closeDonations = document.querySelector('#closeDonations')
const donationView = document.querySelector('.donation-wrapper')
const donationPopUp = document.querySelector('.mollie-payment')
console.log(donationView)

toggleDonations.addEventListener('click', function () {
    donationView.style.display = 'block'
    console.log('clicked')
})

closeDonations.addEventListener('click', function () {
    donationView.style.display = 'none'
    console.log('clicked')
})

window.onscroll = function (ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        donationPopUp.style.display = 'none'
    } else {
        donationPopUp.style.display = 'block'
    }
};