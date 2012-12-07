<?php namespace Illuminate\Queue;

interface QueueInterface {

	/**
	 * Push a new job onto the queue.
	 *
	 * @param  string  $job
	 * @param  mixed   $data
	 * @param  string  $queue
	 * @return void
	 */
	public function push($job, $data = '', $queue = null);

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param  string  $queue
	 * @return Illuminate\Queue\Jobs\Job|nul
	 */
	public function pop($queue = null);

}