<?php if ($site->disabled() == 'false'): ?>
  <?php snippet('header') ?>
    <main class="ns-class" role="main">
      <div class="top">
        <div class="pg-title-wrapper"><h2 class="pg-title"><?= $page->title()->html() ?></h2></div>
        <p class="class-term"><?= $page->term() ?>, <?= $page->year() ?></p>
      </div>
      <div class="body">
        <?php if ($page->intro()->isNotEmpty()): ?>
          <div class="divider"></div>
          <p><?= $page->intro()->kirbytext() ?></p>
        <?php endif ?>
        <?php if ($page->syllabus()->isNotEmpty()): ?>
          <div class="divider"></div>
          <h2>Syllabus</h2>
          <p><?= $page->syllabus()->kirbytext() ?></p>
        <?php endif ?>
        <?php if ($page->grades()->isNotEmpty()): ?>
          <?php
            // find the total weight of all grades
            $totalWeight = 0;
            foreach($page->grades()->toStructure() as $grade) {
              $totalWeight = $totalWeight + 1*($grade->weight().'');
            }
            // add grades to a new array, normalized to add to 100%
            $grades = array();
            foreach($page->grades()->toStructure() as $grade) {
              $grades[] = array(
                'item' => $grade->item().'',
                'weight' => round(100*($grade->weight().'')/$totalWeight) 
              );
            }
          ?>
          <div class="divider"></div>
          <div class="grade-calulator">
            <h2>Calculate your grade</h2>
            <table class="grades-table">
              <tr>
                <th class="txt-left">Criteria</th>
                <th class="txt-center">Weight</th>
                <th class="txt-center"><span class="no-wrap">Expected</span><br><span class="no-wrap">grade (%)</span></th>
                <th class="txt-center">Grade<br>points</th>
              </tr>
              <?php foreach($grades as $grade): ?>
                <tr class="grade-row">
                  <td class="txt-left"><span class="grade-item"><?= $grade['item'] ?></td>
                  <td class="txt-center"><span class="grade-weight" data-weight="<?= $grade['weight'] ?>"><?= $grade['weight'] ?>%</td>
                  <td class="txt-center"><input class="grade-input" type="number" min="0" max="100"></td>
                  <td class="txt-center"><span class="grade-calc">0</span></td>
                </tr>
              <?php endforeach ?>
            </table>
            <p class="final-grade txt-bold">Final grade:&nbsp;<span class="total-grade">0</span>%</p>
            <script type="text/javascript">
              $(document).ready(function(){
                $('.grade-input').change(function(item){
                  // calc grade for item
                  var gradeWeight = $(this).closest('.grade-row').find('.grade-weight').attr('data-weight');
                  var gradeInput = parseInt($(this).val()) || 0;
                  console.log(gradeInput);
                  $(this).closest('.grade-row').find('.grade-calc').text(gradeWeight*gradeInput/100);

                  // calc total grade
                  var totalGrade = 0;
                  $('.grade-row').each(function(index,elem){
                    totalGrade += parseInt($(elem).find('.grade-calc').text());
                  });
                  $('.total-grade').text(totalGrade);
                });

              });
            </script>
          </div>
        <?php endif ?>
        <?php if ($page->schedule()->isNotEmpty()): ?>
          <div class="divider"></div>
          <h2>Schedule</h2>
          <?php foreach($page->schedule()->toStructure() as $event): ?>
            <h4 class="class-date-title"><?= $event->date('F jS, Y') ?></h4>
            <div class="indent"><?= $event->text()->kirbytext() ?></div>
          <?php endforeach ?>
        <?php endif ?>
        <?php if ($page->notes()->isNotEmpty()): ?>
          <div class="divider"></div>
          <h2>Notes</h2>
          <?php foreach($page->notes()->toStructure() as $note): ?>
            <h4 class="class-date-title"><?= $note->date('F jS, Y') ?></h4>
            <div class="indent"><?= $note->text()->kirbytext() ?></div>
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <div class="text wrap">
        <?= $page->text()->kirbytext() ?>
      </div>
      <?php snippet('disqus') ?>
    </main>
  <?php snippet('footer') ?>
<?php else: ?>
  <?php snippet('comingsoon') ?>
<?php endif ?>