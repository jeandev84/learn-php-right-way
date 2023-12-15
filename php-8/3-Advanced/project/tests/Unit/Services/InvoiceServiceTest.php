<?php
declare(strict_types=1);

namespace Tests\Unit\Services;

use App\Services\EmailService;
use App\Services\InvoiceService;
use App\Services\PaymentGatewayService;
use App\Services\SalesTaxService;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{
       public function test_it_processes_invoice(): void
       {
             // Mocks
             $salesTaxServiceMock = $this->createMock(SalesTaxService::class);
             $gatewayServiceMock  = $this->createMock(PaymentGatewayService::class);
             $emailServiceMock    = $this->createMock(EmailService::class);


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
}