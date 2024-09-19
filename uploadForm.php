<!-- uploadForm.php -->
<div class="selectForm" id="selectForm">
    <h3>Select File Here</h3>
    <p>Click to upload a .CSV file</p>
    <form id="csvForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="csv_file" accept=".csv" required id="fileInput">
        <input type="submit" value="Upload CSV" id="uploadButton">
    </form>
</div>
