<div class="container">
    <div class="awesome-bg">
        <form method="post" action="https://skole.vibedrive.dk/upload">
            <div class="form-group ">
                <label for="inputTitle">Opgave titel</label>
                <input type="text" class="form-control" id="inputTitle" name="inputTitle" aria-describedby="titleHelp" placeholder="Opgave titel">
                <small id="titleHelp" class="form-text text-muted">Opgavens titel, som skrevet i det udleveret opgavesæt</small>
            </div>
            <div class="form-group">
                <label for="opgavedesc">Beskrivelse</label>
                <textarea class="form-control" id="opgavedesc" name="opgavedesc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="semester">Vælg semester</label>
                <select class="form-control" name="semester" id="semester">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fag">Vælg fag</label>
                <select class="form-control" name="fag" id="fag">
                    <option value="programmering">Programmering</option>
                    <option value="systemudvikling">Systemudvikling</option>
                    <option value="virksomhed">Virksomhed</option>
                    <option value="database">Database</option>
                    <option value="webudvikling">Webudvikling</option>
                </select>
            </div>
            <div class="form-group">
                <label for="emne">Emne</label>
                <select class="form-control" name="emne" id="emne">
                    <?
                    $sql = "SELECT * FROM topic";
                    $check = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($check)) {
                        $topic_id = $row['topic_id'];
                        $topic_name = $row['topic_name'];

                        echo "<option value='$topic_id'>$topic_name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="code">Source code</label>
                <textarea class="form-control" id="code" name="code" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-black" name="btn_upload">Upload</button>
        </form>
    </div>
</div>