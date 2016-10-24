<select id="major" name = "major" id="majorSelect">
    <option <?php if($_SESSION["major"] == 'Bio_Sci_BA'){echo("selected");}?> value="Bio_Sci_BA">Biological Sciences BA</option>
    <option <?php if($_SESSION["major"] == 'Bio_Sci_BS'){echo("selected");}?> value="Bio_Sci_BS">Biological Sciences BS</option>
    <option <?php if($_SESSION["major"] == 'Biochem_BS'){echo("selected");}?> value="Biochem_BS">Biochemistry and Molecular Biology BS</option>
    <option <?php if($_SESSION["major"] == 'Bioinfo_BS'){echo("selected");}?> value="Bioinfo_BS">Bioinformatics and Computational Biology BS</option>
    <option <?php if($_SESSION["major"] == 'Bio_Edu_BA'){echo("selected");}?> value="Bio_Edu_BA">Biology Education BA</option>
    <option <?php if($_SESSION["major"] == 'Chem_BA'){echo("selected");}?> value="Chem_BA">Chemistry BA</option>
    <option <?php if($_SESSION["major"] == 'Chem_BS'){echo("selected");}?> value="Chem_BS">Chemistry BS</option>
    <option <?php if($_SESSION["major"] == 'Chem_Edu_BA'){echo("selected");}?> value="Chem_Edu_BA">Chemistry Education BA</option>
</select>