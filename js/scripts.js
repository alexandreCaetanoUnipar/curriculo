$(document).ready(function() {
    $('#addExperience').click(function() {
        $('#experienceSection').append(`
            <div class="form-group experience-group">
                <label for="experience">Experiência</label>
                <input type="text" class="form-control" name="experience[]" placeholder="Descrição da experiência" required>
            </div>
        `);
    });

    $('#addReference').click(function() {
        $('#referencesSection').append(`
            <div class="form-group reference-group">
                <label for="reference">Referência</label>
                <input type="text" class="form-control" name="reference[]" placeholder="Descrição da referência" required>
            </div>
        `);
    });
});