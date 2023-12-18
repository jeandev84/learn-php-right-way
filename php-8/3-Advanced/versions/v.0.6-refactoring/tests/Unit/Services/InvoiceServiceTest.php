<?php
declare(strict_types=1);

namespace Tests\Unit\Services;

use App\Services\Email\EmailSenderService;
use App\Services\Invoice\Processor\InvoiceService;
use App\Services\Payment\Gateway\PaymentGateway;
use App\Services\Sales\SalesTaxService;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{
       public function test_it_processes_invoice(): void
       {
             // Mocks
             $salesTaxServiceMock = $this->createMock(SalesTaxService::class);
             $gatewayServiceMock  = $this->createMock(PaymentGateway::class);
             $emailServiceMock    = $this->createMock(EmailSenderService::class);

             $gatewayServiceMock->method('charge')->willReturn(true);

             // given invoice service
             $invoiceService = new InvoiceService(
                 $salesTaxServiceMock,
                 $gatewayServiceMock,
                 $emailServiceMock
             );

             $customer = ['name' => 'Gio'];
             $amount   = 150;

             // when process is called
             $result = $invoiceService->process($customer, $amount);

             // then assert invoice is processed successfully
             $this->assertTrue($result);
       }




      public function test_it_sends_receipt_email_when_invoice_is_processed(): void
      {
            $customer = ['name' => 'Gio'];
            $salesTaxServiceMock = $this->createMock(SalesTaxService::class);
            $gatewayServiceMock  = $this->createMock(PaymentGateway::class);
            $emailServiceMock    = $this->createMock(EmailSenderService::class);

            $gatewayServiceMock->method('charge')->willReturn(true);

            $emailServiceMock
                ->expects($this->once())
                ->method('send')
                ->with($customer, 'receipt'); // arguments methods send() from EmailService

            // given invoice service
            $invoiceService = new InvoiceService(
                $salesTaxServiceMock,
                $gatewayServiceMock,
                $emailServiceMock
            );

            $amount   = 150;

            // when process is called
            $result = $invoiceService->process($customer, $amount);

            // then assert invoice is processed successfully
            $this->assertTrue($result);
      }
}