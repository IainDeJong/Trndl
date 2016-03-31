<form action="cover_letter.php" method="post">
    <fieldset>
        <h3>General information:</h3><br>
        How would you describe the place of employment you are applying to?
          <br>&nbsp;<br>
          <select name="company_type">        
             <option value="organization">organization</option>
             <option value="company">company</option>
             <option value="firm">firm</option>
             <option value="agency">agency</option>
          </select>
        <br>&nbsp;<br>
        Please insert the full address of the place of employment that you are applying to:
        <br>&nbsp;<br>
        <div class="form-group">
            <input autofocus class="form-control" name="company" placeholder="Company Name" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="street" placeholder="Company Street + No." type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="zip" placeholder="Company Zip + City" type="text"/>
        </div>
        <br>
        Please insert the date on which you will send out this letter:
        <br>&nbsp;<br>
        <div class="form-group">
            <input class="form-control" name="date" placeholder="Month dd, yyyy" type="text"/>
        </div>
        What function and field are you applying to?
        <br>&nbsp;<br>
        <div class="form-group">
            <input class="form-control" name="function" placeholder="Function" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="field" placeholder="Field" type="text"/>
        </div>
        What is the name of the recipient/contact person: (you can write "sir or madam" if unknown)
          <br>&nbsp;<br>
        <div class="form-group">
            <input class="form-control" name="manager" placeholder="Recipient" type="text"/>
        </div>
           How did this ad come to your attention?
          <br>&nbsp;<br>
        <div class="form-group">
            <input class="form-control" name="source" placeholder="Source" type="text"/>
        </div>
        <br>&nbsp;<br>
          <h3>Concering your motivation:</h3><br>
          Select the two adjectives that best describe the organization you are applying to:
        <div class="checkbox">
          <label><input type="checkbox" name="innovative" value="innovative">Innovative</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="dynamic" value="dynamic">Dynamic</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="influential" value="influential">Influential</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="connected" value="connected">Connected</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="intelligent" value="intelligent">Intelligent</label>
        </div>
        <br>
        What reason has most motivated you to seek employment within this field?
        <br>&nbsp;<br>
             <select name="mot_reason">        
             <option value="Thanks to my formal education">Formal Education</option>
             <option value="Thanks to my informal education">Self Taught</option>
             <option value="Motivated by my personal interest">Personal Interest</option>
             <option value="Motivated by my prior work experience">Prior Work Experience (try to avoid this option)</option>
             <option value="Thanks to my social ties">Social Ties</option>
        </select>
        <br>&nbsp;<br>
        In one or two scentences, please elaborate on the way you became motivated to seek employment in this field:
        <br>&nbsp;<br>
        <div class="form-group">
            <textarea class="form-control" rows="5" name="mot_elab" placeholder="eg: I went to law school, and learned a lot about..."></textarea>
        </div>
        <br>&nbsp;<br>
          <h3>Concering your experience:</h3><br>
          What work experience that you have is most relevant to this job?
          <br>&nbsp;<br>
        <div class="form-group">
            <input class="form-control" name="exp1_func" placeholder="Function" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="exp1_comp" placeholder="Company" type="text"/>
        </div>
        Please explain in two or three scentences how this experience is relevant to the current job you are pursuing.
        <br>&nbsp;<br>
        <div class="form-group">
            <textarea class="form-control" rows="5" name="exp1_elab" placeholder="eg: In this position, I..."></textarea>
        </div>
        <br>&nbsp;<br>
          What other work experience do you have that is relevant to this job?
          <br>&nbsp;<br>
        <div class="form-group">
            <input class="form-control" name="exp2_func" placeholder="Function" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="exp2_comp" placeholder="Company" type="text"/>
        </div>
        Please explain in two or three scentences how this experience is relevant to the current job you are pursuing.
        <br>&nbsp;<br>
        <div class="form-group">
            <textarea class="form-control" rows="5" name="exp2_elab" placeholder="eg: Here, my responsibilities included..."></textarea>
        </div>
        <br>&nbsp;<br>
        Before generating your cover letter, please check if you have filled out all fields correctly. Please copy and paste the letter you recieve into a text editor and check it for mistakes before you sent the letter out. You may also want to play around with the sentence-structures, change the lay-out, or add a paragraph. The world is yours.
        <br>&nbsp;<br>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Generate Cover Letter</button>
        </div>
    </fieldset>
</form>