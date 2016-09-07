def measure(thread=1)
  # Get start time of compile (start time is 11am as default in spec file)
  start_time = Time.now

  # Run block code (default 1 for occurences that don't need the block code)
  thread.times do
    yield() # measure { yield comes from what's in here }
  end

  # Get end time and calculate how much time elapsed in seconds using convertion equation
  end_time = Time.now
  elapsed_time = (end_time - start_time) / thread
end
