$(document).ready(function() {
    const cancelBtn = $('#cancelBtn');
    cancelBtn.on('click', function() {
        popupForm.hide();
    });
    const courseCells = $('.course-cell');
    const popupForm = $('#coursePopup');
    const addCourseBtn = $('#addCourseBtn');
    const deleteContentZone = $('#deleteContent');
    const courseNameInput = $('#courseName');
    const professorInput = $('#professor');
    const classroomInput = $('#classroom');
    const colorSelect = $('#color');
    let activeCell = null;
    let copiedCell = null;

    courseCells.on('click', function() {
        const cell = $(this);
        const day = cell.data('day');
        const hour = cell.data('hour');
        popupForm.css('display', 'block');

        addCourseBtn.off('click').on('click', function(e) {
            e.preventDefault(); // Prevent form submission
            const courseName = courseNameInput.val();
            const professor = professorInput.val();
            const classroom = classroomInput.val();
            const color = colorSelect.val();
            const courseDetails = `
                <strong>${courseName}</strong><br>
                Profesor: ${professor}<br>
                Ambiente: ${classroom}
            `;
            cell.html(courseDetails);
            cell.addClass(color);
            popupForm.css('display', 'none');
            courseNameInput.val('');
            professorInput.val('');
            classroomInput.val('');
        });

        courseCells.draggable({
            helper: 'clone',
            start: function() {
                activeCell = $(this);
            }
        });

        courseCells.droppable({
            drop: function(event, ui) {
                const targetCell = $(this);
                const draggedCell = $(ui.helper);

                if (draggedCell.hasClass('course-cell')) {
                    targetCell.html(draggedCell.html());
                    targetCell.attr('class', draggedCell.attr('class'));
                }
            }
        });

        courseCells.contextmenu(function(e) {
            e.preventDefault();
            copiedCell = $(this).clone();
        });

        $(document).on('keydown', function(e) {
            if (e.ctrlKey && e.key === 'v' && copiedCell !== null) {
                const activeCellClone = activeCell.clone();
                copiedCell.insertAfter(activeCell);
                activeCell = activeCellClone;
                copiedCell = null;
            }
        });
    });

    deleteContentZone.droppable({
        accept: '.course-cell',
        drop: function(event, ui) {
            const draggedCell = $(ui.draggable);

            if (draggedCell.hasClass('course-cell')) {
                draggedCell.html('');
                draggedCell.attr('class', 'course-cell');
            }
        },
        over: function(event, ui) {
            $(this).addClass('delete-hover');
        },
        out: function() {
            $(this).removeClass('delete-hover');
        }
    });
});
