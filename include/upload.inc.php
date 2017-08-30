<div class="container">
    <div class="awesome-bg">
        <form>
            <div class="form-group ">
                <label for="inputTitle">Opgave titel</label>
                <input type="email" class="form-control" id="inputTitle" aria-describedby="titleHelp" placeholder="Opgave titel">
                <small id="titleHelp" class="form-text text-muted">Opgavens titel, som skrevet i det udleveret opgavesæt</small>
            </div>
            <div class="form-group">
                <label for="opgavedesc">Beskrivelse</label>
                <textarea class="form-control" id="opgavedesc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="semester">Vælg semester</label>
                <select class="form-control" id="semester">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fag">Vælg fag</label>
                <select class="form-control" id="fag">
                    <option>Programmering</option>
                    <option>Systemudvikling</option>
                    <option>Virksomhed</option>
                    <option>Database</option>
                    <option>Webudvikling</option>
                </select>
            </div>
            <div class="form-group">
                <label for="code">Source code</label>
                <textarea class="form-control" id="code" rows="10"></textarea>
            </div>
            <!--<div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>-->
            <!--<fieldset class="form-group">
                <legend>Radio buttons</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                        Option three is disabled
                    </label>
                </div>
            </fieldset>-->

            <button type="submit" class="btn btn-black">Upload</button>
        </form>
    </div>
</div>