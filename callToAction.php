<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1000; /* Sit on top */
        bottom: 0;
        right: 0;
        width: 50%; /* Full width */
        height: fit-content; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: white;
        padding: 30px;
        border: 1px solid rgba(0,0,0,0.2);
        border-top-left-radius: 12px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }

    .modal-content {
        background-color: #fffff;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }

    .secondary {
        height: 25px;
        background-color: #18181c;
        padding: 20px;
        line-height: 0px;
        text-align: center;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: .5rem;
        cursor: pointer;
        width: fit-content;
    }

    .navButtons {
        display: flex;
        flex-direction: row;
        gap: 5px;
    }

</style>

<div class="banner">
    <h1 class="logo">Playtest Your Next Card Game At Home</h1>
    <div class="navButtons">
        <button class="secondary" id="learnModalButton">Help</button>
        <!-- <button class="printButton">Remove Watermark</button> -->
        <button class="printButton" id="print-button">🖨️ Print</button>
    </div>
</div>

<div class="cta">
    <div class="benefits">
        <h3 class="bannerText">Print cards for playtesting without making your players read your 💩 handwriting</h3>
        <p class="bannerText">🌀 Step 1: Import a CSV of your cards</p>
        <p class="bannerText">🔄 Step 2: Rearrange the cards to your liking</p>
        <p class="bannerText">🖨️ Step 3: Print at home on US Letter (8.5"x11") paper</p>
    </div>

    <div id="learnModal" class="modal">

        <div id="modal-content">
            <span class="close">&times;</span>

            <div>
                <h2>Formatting your CSV</h2>
                <p>The following words can be used as headers in your .csv file</p>
            </div>
            
            <div>
                <h3>title</h3>
                <p>(Optional) If any cards have this header filled in, a title will appear</p>            
            </div>
            
            <div>
                <h3>content</h3>
                <p>(Required) Every card must have content to describe what the card does. Your CSV file will not upload without one.</p>
            </div>
            
            <div>
                <h3>art</h3>
                <p>(Optional) Paste a URL in this row. If any cards have this filled, an image will appear on your card. This can only be used with valid image file types. </p>
            </div>
        </div>

    </div>
</div>

<script>

// Get the modal
let modal = document.getElementById("learnModal");

// Get the button that opens the modal
let btn = document.getElementById("learnModalButton");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>