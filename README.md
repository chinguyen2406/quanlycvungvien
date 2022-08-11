Các bước để bắt đầu dự án:
1. Clone Source Code:
```bash
git clone git clone git@github.com:codeaamirkalimi/Task-Management-System-Laravel.git
```

```bash
git checkout develope
```

2. Cài đặt các dependencies và packages cần thiết cho Laravel:

```bash
composer install
```
```bash
npm install
```
3. Duplicate file .env.example, đổi tên thành .env sửa thông tin DB cho phù hợp

4. Chạy lệnh:

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

5. Hoàn tất, khởi chạy laravel:

```bash
php artisan serve
```

Truy cập vào web qua http://localhost:8000

Các bước để code và đẩy code:

1. Tại branch develope hoặc branch gốc của phase code tương ứng, lấy code mới nhất từ repository gitlab

```bash
git pull
```

2. Sau khi pull hoàn tất, tạo 1 branch mới với tên branch dễ nhận diện (thường là theo tên task VD: Coding#123456)
```bash
git checkout -b <tên branch>
```

3. Viết code trên branch đã tạo (dùng lệnh git checkout -b sẽ vừa tạo mới, vừa chuyển ngay sang branch mới. Nếu chuyển sang branch đã tạo chỉ cần `git checkout <tên branch>`)

Sau khi viết code xong thực hiện

```bash
git add .
```

```bash
git commit -m "<giải thích nội dung thanh đổi của commit>"
```

4. Sau khi viết và test code ok, thực hiện đẩy code lên.

```bash
git checkout develope
```

```bash
git pull
```

Lệnh trên giúp quay về nhánh dev chính để lấy code mới nhất từ repository về

5. Ghép code từ nhánh chính sang nhánh của bản thân để đồng nhất code:

```bash
git checkout <tên nhánh>
```

```bash
git rebase develope
```

Bước này sẽ kéo toàn bộ log của nhánh develope sang nhánh đang code, commit của nhánh hiện tại sẽ ở trên cùng

6. Đẩy code của nhánh hiện tại lên repository

```bash
git push origin <tên nhánh>
```

Lưu ý: Tên nhánh lúc đẩy phải trùng với tên nhánh đang code và đẩy trong lúc đang checkout ở nhánh đó

- Tuyệt đối không push lên nhánh develope hay push khi đang ở nhánh develope

7. Truy cập vào gitlab và thực hiện merge request nhánh vừa đẩy vào nhánh develope, chờ leader review code và merge
