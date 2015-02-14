<?php
namespace kahlan\reporter;

class Reporter
{
    /**
     * Starting time.
     *
     * @var float
     */
    protected $_start = 0;

    /**
     * Total of items to reach.
     *
     * @var integer
     */
    protected $_total = 0;

    /**
     * Current position.
     *
     * @var integer
     */
    protected $_current = 0;

    /**
     * The Constructor.
     *
     * @param array $config The config array. Possible values are:
     *                      - `'start' _integer_: A microtime value.
     */
    public function __construct($config = [])
    {
        $defaults = ['start' => microtime(true)];
        $config += $defaults;
        $this->_start = $config['start'];
    }

    /**
     * Callback called before any specs processing.
     *
     * @param array $params The suite params array.
     */
    public function begin($params)
    {
        $this->_start = $this->_start ?: microtime(true);
        $this->_total = max(1, $params['total']);
    }

    /**
     * Callback called before a spec.
     *
     * @param object $report The report object.
     */
    public function before($report = null)
    {
        $this->_current++;
    }

    /**
     * Callback called after a spec.
     *
     * @param object $report The report object.
     */
    public function after($report = null)
    {
    }

    /**
     * Callback called on successful expect.
     *
     * @param object $report The report object.
     */
    public function pass($report = null)
    {
    }

    /**
     * Callback called on failure.
     *
     * @param object $report The report object.
     */
    public function fail($report = null)
    {
    }

    /**
     * Callback called when an exception occur.
     *
     * @param object $report The report object.
     */
    public function exception($report = null)
    {
    }

    /**
     * Callback called on a skipped spec.
     *
     * @param object $report The report object.
     */
    public function skip($report = null)
    {
    }

    /**
     * Callback called when a `kahlan\IncompleteException` occur.
     *
     * @param object $report The report object.
     */
    public function incomplete($report = null)
    {
    }

    /**
     * Callback called at the end of specs processing.
     */
    public function end($results = [])
    {
    }

    /**
     * Callback called at the end of the process.
     */
    public function stop($results = [])
    {
    }
}
