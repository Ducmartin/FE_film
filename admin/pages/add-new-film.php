<div class="col-md-10">
    <div id="content">
        <div class="header" style="text-align:center">
            <h1 >Thêm phim mới cập nhật</h1>
        </div>
        <form action="">
            <div class="form-group title">
                <label for="title">Tên Phim:</label>
                <input type="text" class=" form-control" name="title" placeholder="Tên phim">
            </div>
            <div class="form-group calendar">
                <label for="calendar">Lịch chiếu phim:</label>
                <input type="text" class=" form-control" name="calendar" placeholder="Lịch chiếu phim">
            </div>
            <div class="form-group rate">
                <label for="rate">Đánh giá phim:</label>
                <input type="number" min="1" max="10" class=" form-control" name="rate" placeholder="Đánh giá phim">
            </div>
            <div class="form-group">
                <label for="film">Chuyên mục phim:</label>
                <select name="film" class="form-control" id="film">
                    <option value="">Chuyên mục</option>
                    <option value="">Phim bộ</option>
                    <option value="">Phim lẻ</option>
                    <option value="">Phim chiếu rạp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kind-of-film">Thể loại phim:</label>
                <select name="kind-of-film" class="form-control" id="kind-of-film">
                    <option value="">Thể loại</option>
                    <option value="">Phim Kinh dị</option>
                    <option value="">Phim Hành động</option>
                    <option value="">Phim cổ trang</option>
                    <option value="">Phim ngôn tình</option>
                </select>
            </div>
            <div class="form-group">
                <label for="country">Quốc gia:</label>
                <select name="country" class="form-control" id="country">
                    <option value="">Quốc gia</option>
                    <option value="">Trung Quốc</option>
                    <option value="">Hàn Quốc</option>
                    <option value="">Mỹ</option>
                </select>
            </div>
            <div class="form-group photo">
                <label for="photo">Ảnh đại diện phim:</label>
                <input type="file"  name="rate" placeholder="Ảnh đại diện phim">
            </div>
            <div class="form-group bg_img">
                <label for="bg_img">Ảnh nền phần giới thiệu:</label>
                <input type="file"  name="bg_img" placeholder="Ảnh nền phần giới thiệu">
            </div>
            <input type="submit" class="btn btn-warning" value="Thêm mới">
        </form>
    </div>
</div>