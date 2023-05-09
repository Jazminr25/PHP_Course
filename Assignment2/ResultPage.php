
<?php

if (isset($_POST['Submit']) || $sneaky == 1) {
    print("<fieldset>");
    switch ($action) {
        case "Insert" :
            include 'Add.php';
            break;
        case "Update" :
            include "Update.php";
            break;
        case "Search" :
            include 'Search.php';
            break;
        default: print("Something is wrong");
    }
    print<<<HTML
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Submit">Submit</label>
                                    <div class="col-md-4">
                                        <input id="submit" name="Submit" class="btn btn-primary" type="submit"></input>
                                    </div>
                                </div>                                
                                <input type="hidden" value=0 name="sneaky"></input>
                            </fieldset>                            
HTML;
}