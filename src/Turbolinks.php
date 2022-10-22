<?php

namespace Bfg\Livewire;

class Turbolinks
{
    /**
     * @var string
     */
    protected string $appEndStr = "";

    /**
     * @param  string  $value
     */
    public function __construct(
        protected string|bool|int $value = ""
    ) {
    }

    /**
     * @return $this
     */
    public function actionReplace()
    {
        $this->appEndStr = "action";
        $this->value = "replace";

        return $this;
    }

    /**
     * @return $this
     */
    public function eval()
    {
        $this->appEndStr = 'eval';

        return $this;
    }

    /**
     * @return $this
     */
    public function permanent()
    {
        $this->appEndStr = 'permanent';

        return $this;
    }

    /**
     * @return $this
     */
    public function trackReload()
    {
        $this->appEndStr = "track";
        $this->value = "reload";

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $value = $this->value;

        if ($value === true) $value = "true";
        if ($value === false) $value = "false";
        if ($value === null) $value = "null";

        return "data-turbolinks"
            . ($this->appEndStr ? "-$this->appEndStr":"")
            . ($value ? "='$value'":"");
    }
}
