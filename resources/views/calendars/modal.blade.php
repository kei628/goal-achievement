<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <h2>Editing</h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main>
　　　　　　　   <form action="/calendars" method="POST">
                    @csrf
                    <div class="stamp">
                        <h2>Level of achievement</h2>
                        <select name="calendar[stamp]">
                            <option value="○">〇</option>
                            <option value="△">△</option>
                            <option value="×">✕</option>
                        </select>
                    </div>
                    <div class="body">
                        <h2>Things I have done</h2>
                        <textarea name="calendar[body]" placeholder="今日したこと"/></textarea>
                    </div>
                    <div class="memo">
                        <h2>memo</h2>
                        <textarea name="calendar[memo]" placeholder="日記"></textarea>
                    </div>
                    <input type="hidden" name="start_date" id="start_date" value="">
                    <input type="hidden" name="end_date" id="end_date" value="">
                    
                    <div class="store">
                    <input type="submit" value="store"/>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
