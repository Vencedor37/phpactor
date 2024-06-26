<?php

namespace Phpactor\WorseReflection\Core\DiagnosticProvider;

use Phpactor\TextDocument\ByteOffsetRange;
use Phpactor\WorseReflection\Core\Diagnostic;
use Phpactor\WorseReflection\Core\DiagnosticSeverity;

class BareDiagnostic implements Diagnostic
{
    private ByteOffsetRange $range;

    private DiagnosticSeverity $severity;

    private string $message;

    public function __construct(ByteOffsetRange $range, DiagnosticSeverity $severity, string $message)
    {
        $this->range = $range;
        $this->severity = $severity;
        $this->message = $message;
    }

    public function range(): ByteOffsetRange
    {
        return $this->range;
    }

    public function severity(): DiagnosticSeverity
    {
        return $this->severity;
    }

    public function message(): string
    {
        return $this->message;
    }
}
