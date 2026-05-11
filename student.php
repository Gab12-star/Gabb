<?php
if (isset($_POST['add_row'])) {
    $num_schools = (int)$_POST['num_schools'] + 1;
} else {
    $num_schools = isset($_POST['num_schools']) ? (int)$_POST['num_schools'] : 1;
}

$display_result = false;
if (isset($_POST['submit_registration'])) {
    $f_name = ucwords(strtolower($_POST['stud_name']));
    $f_id = $_POST['stud_id'];
    $schools = $_POST['prev_school'];
    $grades = $_POST['grade_level'];
    $display_result = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; font-size: 12px; }
        .form-container { background: white; width: 800px; margin: auto; padding: 30px; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        .header-title { text-align: right; font-size: 24px; font-weight: bold; margin-bottom: 20px; color: #333; }
        .section-header { background: black; color: white; padding: 5px 10px; font-weight: bold; text-transform: uppercase; margin-top: 15px; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; border: 1px solid #000; border-top: none; }
        .grid-item { padding: 10px; border: 0.5px solid #000; display: flex; flex-direction: column; }
        label { font-size: 10px; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { border: none; border-bottom: 1px solid #ccc; outline: none; padding: 5px; width: 95%; }
        .checkbox-group { display: flex; gap: 10px; align-items: center; margin-top: 5px; }
        .action-bar { display: flex; justify-content: space-between; margin-top: 20px; }
        .btn-add { background: #eee; border: 1px solid #999; padding: 5px 15px; cursor: pointer; font-weight: bold; border-radius: 3px; }
        .btn-submit { background: #333; color: white; border: none; padding: 10px 25px; cursor: pointer; font-weight: bold; text-transform: uppercase; }
        .result-box { margin-top: 30px; padding: 20px; border: 2px solid black; background: #fff; }
    </style>
</head>
<body>

<div class="form-container">
    <div class="header-title">Student Registration Form</div>

    <form method="POST" action="">
        <input type="hidden" name="num_schools" value="<?php echo $num_schools; ?>">

        <div class="section-header">Student Information</div>
        <div class="form-grid">
            <div class="grid-item" style="grid-column: span 3;">
                <label>FULL LEGAL NAME</label>
                <input type="text" name="stud_name" required>
            </div>
            <div class="grid-item">
                <label>STUDENT NUMBER / ID</label>
                <input type="text" name="stud_id" required>
            </div>
            <div class="grid-item">
                <label>GENDER</label>
                <div class="checkbox-group">
                    <input type="radio" name="gender" value="Male"> Male 
                    <input type="radio" name="gender" value="Female"> Female
                </div>
            </div>
            <div class="grid-item">
                <label>DATE OF BIRTH</label>
                <input type="text" placeholder="YYYY / MM / DD">
            </div>
        </div>

        <div class="section-header">Previous School Information</div>
        <div id="school-section">
            <?php for($i = 0; $i < $num_schools; $i++): ?>
            <div class="form-grid" style="border-top: 1px solid black; margin-bottom: -1px;">
                <div class="grid-item" style="grid-column: span 2;">
                    <label>NAME OF PREVIOUS SCHOOL #<?php echo ($i+1); ?></label>
                    <input type="text" name="prev_school[]" required>
                </div>
                <div class="grid-item">
                    <label>GRADE AT PREVIOUS SCHOOL</label>
                    <input type="text" name="grade_level[]" required>
                </div>
            </div>
            <?php endfor; ?>
        </div>

        <div class="action-bar">
            <button type="submit" name="add_row" class="btn-add">+ Add Another School</button>
            <button type="submit" name="submit_registration" class="btn-submit">Submit Form</button>
        </div>
    </form>

    <?php if ($display_result): ?>
        <div class="result-box">
            <h3 style="margin-top:0;">REGISTRATION SUMMARY</h3>
            <p><strong>NAME:</strong> <?php echo $f_name; ?></p>
            <p><strong>ID:</strong> <?php echo $f_id; ?></p>
            <table width="100%" border="1" cellpadding="5" style="border-collapse: collapse;">
                <tr style="background: #eee;">
                    <th>School History</th>
                    <th>Grade Level</th>
                </tr>
                <?php for($i = 0; $i < count($schools); $i++): ?>
                <tr>
                    <td><?php echo ucwords(strtolower($schools[$i])); ?></td>
                    <td><?php echo strtoupper($grades[$i]); ?></td>
                </tr>
                <?php endfor; ?>
            </table>
        </div>
    <?php endif; ?>
</div>

</body>
</html>