<?php

use App\Http\Controllers\adminAuthController;
use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\admitCardController;
use App\Http\Controllers\backend\CertificateController;
use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\backend\ExamController;
use App\Http\Controllers\backend\NoticeController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\resultController;
use App\Http\Controllers\backend\teachersController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/courses', [FrontendController::class, 'courses']);
Route::get('/teachers', [FrontendController::class, 'teachers']);
Route::get('/teacher-info/{id}', [FrontendController::class, 'teacherInfo']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);
Route::post('/contact-us/store', [FrontendController::class, 'contactUsStore']);
Route::get('/course-details/{id}', [FrontendController::class, 'courseDetails']);
Route::get('/admission', [FrontendController::class, 'admission']);
Route::post('/admission/store', [FrontendController::class, 'admissionStore']);

// Student Result 
Route::get('/student-result', [FrontendController::class, 'studentResult']);
Route::post('/student-result', [FrontendController::class, 'showResult']);

// certificate check
Route::get('/certificate/check', [FrontendController::class, 'checkForm']);
Route::post('/certificate/check', [FrontendController::class, 'checkStatus']);

// Notice
Route::get('/notice', [FrontendController::class, 'notice']);
Route::get('/notice/{id}', [FrontendController::class, 'show']);


// Auth Route
Route::get('/admin/login', [adminAuthController::class, 'adminLogin']);
Route::get('/admin/logout', [adminAuthController::class, 'adminLogOut']);
Auth::routes();

Route::get('/admin/dashboard', [adminController::class, 'adminDashboard']);

// Students
Route::get('/admin/student/list', [adminController::class, 'studentList']);
Route::post('/admin/student/status/{id}', [adminController::class, 'updateStatus']);
Route::get('/admin/student/delete/{id}', [adminController::class, 'deleteStudent']);
Route::get('/admin/student/edit/{id}', [adminController::class, 'editStudent']);
Route::post('/admin/student/update/{id}', [adminController::class, 'updateStudent']);

//Teachers
Route::get('/admin/teacher/add', [teachersController::class, 'addTeacher']);
Route::post('/admin/teacher/store', [teachersController::class, 'teacherStore']);
Route::get('/admin/teacher/list', [teachersController::class, 'teacherList']);
Route::get('/admin/teacher/view/{id}', [teachersController::class, 'teacherView']);
Route::get('/admin/teacher/delete/{id}', [teachersController::class, 'teacherDelete']);
Route::get('/admin/teacher/edit/{id}', [teachersController::class, 'teacherEdit']);
Route::post('/admin/teacher/update/{id}', [teachersController::class, 'updateTeacher']);
Route::get('/admin/teacher/assign-course/{id}', [teachersController::class, 'assignCourse']);
Route::post('/admin/teacher/assign-course/store', [TeachersController::class, 'storeAssignCourse']);


//Course
Route::get('/admin/course', [CourseController::class, 'course']);
Route::get('/admin/course/create', [CourseController::class, 'courseCreate']);
Route::post('/admin/course/store', [CourseController::class, 'courseStore']);
Route::get('/admin/course/delete/{id}', [CourseController::class, 'courseDelete']);
Route::get('/admin/course/edit/{id}', [CourseController::class, 'courseEdit']);
Route::post('/admin/course/update/{id}', [CourseController::class, 'courseUpdate']);

//Admission payment
Route::get('/admin/payments/create/{student_id}', [PaymentController::class, 'createPayment']);
Route::post('/admin/payments/store/{student_Id}', [PaymentController::class, 'paymentStore']);
Route::get('/admin/payment/list', [PaymentController::class, 'paymentList']);
Route::get('/payment/print/{id}', [PaymentController::class, 'paymentPrint']);

//contact Messege..
Route::get('/admin/contact-us', [adminController::class, 'contactUs']);
Route::get('/admin/contact-us/delete/{id}', [adminController::class, 'contactUsDelete']);

//Admit Card...
Route::get('/admin/admit-card', [admitCardController::class, 'admitCard']);
Route::get('/admin/admit-card/create', [admitCardController::class, 'admitCardCreate']);
Route::post('/admin/admit-card/store', [admitCardController::class, 'admitCardStore']);
Route::get('/admin/admit-card/print-admit/{id}', [AdmitCardController::class, 'printadmit']);
Route::get('/admin/admit-card/delete/{id}', [AdmitCardController::class, 'admitDelete']);
Route::get('/admin/admit-card/edit/{id}', [AdmitCardController::class, 'admitEdit']);
Route::post('/admin/admit-card/update/{id}', [AdmitCardController::class, 'admitUpdate']);

//Exam
Route::get('/admin/exam', [ExamController::class, 'exam']);
Route::get('/admin/exam/create', [ExamController::class, 'examCreate']);
Route::post('/admin/exam/store', [ExamController::class, 'examStore']);
Route::get('/admin/exam/delete/{id}', [ExamController::class, 'examDelete']);

//Result...
Route::get('/admin/student/result', [resultController::class, 'studentResult']);
Route::get('/admin/student/result-create', [resultController::class, 'createResult']);
Route::post('/admin/student/result/store', [resultController::class, 'storeResult']);
Route::get('/admin/student/resule/edit/{id}', [resultController::class, 'editResult']);
Route::post('/admin/student/resule/update/{id}', [resultController::class, 'updateResult']);
Route::get('/admin/student/resule/delete/{id}', [resultController::class, 'deleteResult']);

// Certificate...
Route::get('/admin/student/certificate', [CertificateController::class, 'studentCertificate']);
Route::get('/admin/student/certificate/create', [CertificateController::class, 'studentCertificateCreate']);
Route::post('/admin/student/certificate/store', [CertificateController::class, 'certificateStore']);
Route::get('/admin/student/certificate/{id}', [CertificateController::class, 'certificateView']);
Route::get('/admin/student/certificate/delete/{id}', [CertificateController::class, 'certificateDelete']);
Route::get('/admin/student/certificate/print/{id}', [CertificateController::class, 'certificatePrint']);

//Report....
Route::get('/admin/reports', [ReportController::class, 'allReports']);
Route::get('/admin/reports/students', [ReportController::class, 'studentReports']);
Route::get('/admin/reports/teachers', [ReportController::class, 'teacherReports']);
Route::get('/admin/reports/courses', [ReportController::class, 'courseReports']);
Route::get('/admin/reports/payments', [ReportController::class, 'paymentReports']);
Route::get('/admin/reports/certificates', [ReportController::class, 'certificateReports']);

// Notice
Route::get('/admin/notice', [NoticeController::class, 'Notice']);
Route::get('/admin/notice/create', [NoticeController::class, 'noticeCreate']);
Route::post('/admin/notice/store', [NoticeController::class, 'noticeStore']);
Route::post('/admin/notice/toggle-status/{id}', [NoticeController::class, 'toggleStatus']);
Route::get('/admin/notice/delete/{id}', [NoticeController::class, 'noticeDelete']);
Route::get('/admin/notice/edit/{id}', [NoticeController::class, 'noticeEdit']);
Route::post('/admin/notice/update/{id}', [NoticeController::class, 'noticeUpdate']);

// Testimonial
Route::get('/admin/testimonial', [TestimonialController::class, 'testimonial']);
Route::get('/admin/testimonial/create', [TestimonialController::class, 'testimonialCreate']);
Route::post('/admin/testimonial/store', [TestimonialController::class, 'testimonialStore']);
Route::get('/admin/testimonial/delete/{id}', [TestimonialController::class, 'testimonialDelete']);
Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'testimonialEdit']);
Route::post('/admin/testimonial/update/{id}', [TestimonialController::class, 'testimonialUpdate']);